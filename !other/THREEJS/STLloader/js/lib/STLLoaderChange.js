/**
 * Description: A THREE loader for STL ASCII files, as created by Solidworks and other CAD programs.
 *
 * Supports both binary and ASCII encoded files, with automatic detection of type.
 *
 * The loader returns a non-indexed buffer geometry.
 *
 * Limitations:
 *  Binary decoding supports "Magics" color format (http://en.wikipedia.org/wiki/STL_(file_format)#Color_in_binary_STL).
 *  There is perhaps some question as to how valid it is to always assume little-endian-ness.
 *  ASCII decoding assumes file is UTF-8.
 *
 * Usage:
 *  var loader = new THREE.STLLoader();
 *  loader.load( './models/stl/slotted_disk.stl', function ( geometry ) {
 *    scene.add( new THREE.Mesh( geometry ) );
 *  });
 *
 * For binary STLs geometry might contain colors for vertices. To use it:
 *  // use the same code to load STL as above
 * * Для двоичной геометрии STL может содержать цвета для вершин. Чтобы использовать его:
 * // используйте тот же код для загрузки STL, что и выше
 * 
 *  if (geometry.hasColors) {
 *    material = new THREE.MeshPhongMaterial({ opacity: geometry.alpha, vertexColors: true });
 *  } else { .... }
 *  var mesh = new THREE.Mesh( geometry, material );
 *
 * For ASCII STLs containing multiple solids, each solid is assigned to a different group.
 * Groups can be used to assign a different color by defining an array of materials with the same length of
 * geometry.groups and passing it to the Mesh constructor:
 * 
 * * Для ASCII STL, содержащих несколько твердых тел, каждое твердое тело назначается другой группе.
 * Группы можно использовать для назначения другого цвета, определив массив материалов с одинаковой длиной
 * geometry.groups и передав его конструктору сетки:
 *
 * var mesh = new THREE.Mesh( geometry, material );
 *
 * For example:
 *
 *  var materials = [];
 *  var nGeometryGroups = geometry.groups.length;
 *
 *  var colorMap = ...; // Some logic to index colors.
 *
 *  for (var i = 0; i < nGeometryGroups; i++) {
 *
 *		var material = new THREE.MeshPhongMaterial({
 *			color: colorMap[i],
 *			wireframe: false
 *		});
 *
 *  }
 *
 *  materials.push(material);
 *  var mesh = new THREE.Mesh(geometry, materials);
 */


THREE.STLLoader = function ( manager ) {

	THREE.Loader.call( this, manager );

};

THREE.STLLoader.prototype = Object.assign( Object.create( THREE.Loader.prototype ), {

	constructor: THREE.STLLoader,

	load: function ( url, onLoad, onProgress, onError ) {

		var scope = this;

		var loader = new THREE.FileLoader( this.manager );
		loader.setPath( this.path );
		loader.setResponseType( 'arraybuffer' );
		loader.setRequestHeader( this.requestHeader );
		loader.setWithCredentials( this.withCredentials );

		loader.load( url, function ( text ) {

			try {

				onLoad( scope.parse( text ) );

			} catch ( e ) {

				if ( onError ) {

					onError( e );

				} else {

					console.error( e );

				}

				scope.manager.itemError( url );

			}

		}, onProgress, onError );

	},

	parse: function ( data ) {

		function isBinary( data ) {

			var expect, face_size, n_faces, reader;
			reader = new DataView( data );
			face_size = ( 32 / 8 * 3 ) + ( ( 32 / 8 * 3 ) * 3 ) + ( 16 / 8 );
			n_faces = reader.getUint32( 80, true );
			expect = 80 + ( 32 / 8 ) + ( n_faces * face_size );

			if ( expect === reader.byteLength ) {

				return true;

			}

			// An ASCII STL data must begin with 'solid ' as the first six bytes.
			// However, ASCII STLs lacking the SPACE after the 'd' are known to be
			// plentiful.  So, check the first 5 bytes for 'solid'.

			// Several encodings, such as UTF-8, precede the text with up to 5 bytes:
			// https://en.wikipedia.org/wiki/Byte_order_mark#Byte_order_marks_by_encoding
			// Search for "solid" to start anywhere after those prefixes.

			// Порядковые значения US-ASCII для 's', 'o', 'l', 'i', 'd'

			var solid = [ 115, 111, 108, 105, 100 ];

			for ( var off = 0; off < 5; off ++ ) {

				// If "solid" text is matched to the current offset, declare it to be an ASCII STL.
				// Если "solid" текст соответствует текущему смещению, объявите его ASCII STL.

				if ( matchDataViewAt( solid, reader, off ) ) return false;

			}

			// Couldn't find "solid" text at the beginning; it is binary STL.

			return true;

		}

		function matchDataViewAt( query, reader, offset ) {

			// Check if each byte in query matches the corresponding byte from the current offset
			// Проверьте, соответствует ли каждый байт в запросе соответствующему байту из текущего смещения

			for ( var i = 0, il = query.length; i < il; i ++ ) {

				if ( query[ i ] !== reader.getUint8( offset + i, false ) ) return false;

			}

			return true;

		}

		function parseBinary( data ) {

			var reader = new DataView( data );
			var faces = reader.getUint32( 80, true );

			var r, g, b, hasColors = false, colors;
			var defaultR, defaultG, defaultB, alpha;


			// var accuracy = 1;

			// process STL header
			// check for default color in header ("COLOR=rgba" sequence).
			// заголовок process STL
			// проверьте наличие цвета по умолчанию в заголовке (последовательность"COLOR=rgba").

			for ( var index = 0; index < 80 - 10; index ++ ) {

				if ( ( reader.getUint32( index, false ) == 0x434F4C4F /*COLO*/ ) &&
					( reader.getUint8( index + 4 ) == 0x52 /*'R'*/ ) &&
					( reader.getUint8( index + 5 ) == 0x3D /*'='*/ ) ) {

					hasColors = true;
					colors = new Float32Array( faces * 3 * 3 );

					defaultR = reader.getUint8( index + 6 ) / 255;
					defaultG = reader.getUint8( index + 7 ) / 255;
					defaultB = reader.getUint8( index + 8 ) / 255;
					alpha = reader.getUint8( index + 9 ) / 255;

				}

			}

			var dataOffset = 84;
			var faceLength = 12 * 4 + 2;

			var geometry = new THREE.BufferGeometry();

			var vertices = new Float32Array( faces * 3 * 3 );
			var normals = new Float32Array( faces * 3 * 3 );
			var colors = new Float32Array( faces * 3 * 3 );
			
			for ( var face = 0; face < faces; face ++ ) {

				var start = dataOffset + face * faceLength;
				var normalX = reader.getFloat32( start, true );
				var normalY = reader.getFloat32( start + 4, true );
				var normalZ = reader.getFloat32( start + 8, true );

				if ( hasColors ) {

					var packedColor = reader.getUint16( start + 48, true );

					if ( ( packedColor & 0x8000 ) === 0 ) {

						// facet has its own unique color

						r = ( packedColor & 0x1F ) / 31;
						g = ( ( packedColor >> 5 ) & 0x1F ) / 31;
						b = ( ( packedColor >> 10 ) & 0x1F ) / 31;

					} else {

						r = defaultR;
						g = defaultG;
						b = defaultB;

					}

				}else{//эксперемент
					
				}

				for ( var i = 1; i <= 3; i ++ ) {

					var vertexstart = start + i * 12;
					var componentIdx = ( face * 3 * 3 ) + ( ( i - 1 ) * 3 );

					vertices[ componentIdx ] = reader.getFloat32( vertexstart, true );
					vertices[ componentIdx + 1 ] = reader.getFloat32( vertexstart + 4, true );
					vertices[ componentIdx + 2 ] = reader.getFloat32( vertexstart + 8, true );

					normals[ componentIdx ] = normalX;
					normals[ componentIdx + 1 ] = normalY;
					normals[ componentIdx + 2 ] = normalZ;

					if ( hasColors ) {

						colors[ componentIdx ] = r;
						colors[ componentIdx + 1 ] = g;
						colors[ componentIdx + 2 ] = b;

					} 
					else
					{ // эксперемент

						// ////if((normalX >-1 && normalX < accuracy) && (normalY >=1 && (normalY-1) < accuracy) && (normalZ >-1 && normalZ < accuracy)){
						// if((normalX >-1 && normalX < accuracy) && (normalY > 0  && (1/normalY-1) <= accuracy) && (normalZ >-1 && normalZ < accuracy)){
						// //// if(normalX===0 && normalY===1 && normalZ===0){
							// 123.95.toFixed( 1 ) = "124.0"
							// accuracy = 2; //1 - учитывается отклонение; 2,3 - не учитывается
							let X= +normalX.toFixed(accuracy);
							let Y= +normalY.toFixed(accuracy);
							let Z= +normalZ.toFixed(accuracy);
						 if(X==0 && Y==1 && Z==0){
						//  if(Math.round(normalX)==0 && Math.round(normalY)==1 && Math.round(normalZ)==0){
							// зеленый сверху Top (normalX===0 && normalY===1 && normalZ===0)
							colors[ componentIdx ] =       0/255;
							colors[ componentIdx + 1 ] = 255/255;
							colors[ componentIdx + 2 ] =   0/255;
						// }else if((normalX >-1 && normalX <= accuracy) && (normalY <  0 && normalY >=-1 && (normalY+1) <=accuracy) && (normalZ >-1 && normalZ <= accuracy)){
						}else if(X==0 && Y==-1 && Z==0){							
							// пурпурный снизу  Bottom
							colors[ componentIdx ] =     255/255;
							colors[ componentIdx + 1 ] = 0/255;
							colors[ componentIdx + 2 ] = 255/255;
												
						// }else if((normalX >-1 && normalX <= accuracy) && (normalY >-1 && normalY <= accuracy) && (normalZ >=1 && (normalZ -1) <=accuracy)){
						}else if(X==0 && Y==0 && Z==1){
							// синий спереди Front
							colors[ componentIdx ] =       0/255;
							colors[ componentIdx + 1 ] =   0/255;
							colors[ componentIdx + 2 ] = 255/255;
						// }else if((normalX >-1 && normalX <= accuracy) && (normalY >-1 && normalY <= accuracy) && (normalZ<0 && normalZ >=-1 && (normalZ+1) <=accuracy)){
						}else if(X==0 && Y==0 && Z==-1){
							// жёлтый сзади Back
							// console.log("normal  "+normalX+" ; "+normalY+" ; "+normalZ);
							colors[ componentIdx ] =     255/255;
							colors[ componentIdx + 1 ] = 255/255;
							colors[ componentIdx + 2 ] =   0/255;
							
						// }else if((normalX >=1 && (normalX -1) <=accuracy) && (normalY >-1 && normalY <= accuracy) && (normalZ >-1 && normalZ <= accuracy)){
						}else if(X==1 && Y==0 && Z==0){
							// красный справа Right
							colors[ componentIdx ] =   255/255;
							colors[ componentIdx + 1 ] = 0/255;
							colors[ componentIdx + 2 ] = 0/255;	
							
						// }else if((normalX < 0 && normalX >=(-1) && (normalX+1) <=accuracy) && (normalY >-1 && normalY <= accuracy) && (normalZ >-1 && normalZ <= accuracy)){
						}else if(X==-1 && Y==0 && Z==0){
							// голубой слева Left
							colors[ componentIdx ] =       0/255;
							colors[ componentIdx + 1 ] = 255/255;
							colors[ componentIdx + 2 ] = 255/255;
						
						}else {
							// общий вид
							// console.log("normal общий вид "+normalX+" ; "+normalY+" ; "+normalZ);
							colors[ componentIdx ] =     190/255;
							colors[ componentIdx + 1 ] = 190/255;
							colors[ componentIdx + 2 ] = 190/255;
						}
						
						
						
						
					
						// colors[ componentIdx ] =       normalX;;
						// colors[ componentIdx + 1 ] =   normalY;
						// colors[ componentIdx + 2 ] = normalZ;
					}

				}

			}

			geometry.setAttribute( 'position', new THREE.BufferAttribute( vertices, 3 ) );
			geometry.setAttribute( 'normal', new THREE.BufferAttribute( normals, 3 ) );

			if ( hasColors ) {

				geometry.setAttribute( 'color', new THREE.BufferAttribute( colors, 3 ) );
				geometry.hasColors = true;
				geometry.alpha = alpha;

			} else{ // эксперемент
				geometry.setAttribute( 'color', new THREE.BufferAttribute( colors, 3 ) );
				geometry.hasColors = true;
				// geometry.alpha = alpha;
				geometry.alpha = 1;
			}

			return geometry;

		}

		function parseASCII( data ) {

			var geometry = new THREE.BufferGeometry();
			var patternSolid = /solid([\s\S]*?)endsolid/g;
			var patternFace = /facet([\s\S]*?)endfacet/g;
			var faceCounter = 0;

			var patternFloat = /[\s]+([+-]?(?:\d*)(?:\.\d*)?(?:[eE][+-]?\d+)?)/.source;
			var patternVertex = new RegExp( 'vertex' + patternFloat + patternFloat + patternFloat, 'g' );
			var patternNormal = new RegExp( 'normal' + patternFloat + patternFloat + patternFloat, 'g' );

			var vertices = [];
			var normals = [];
			var colors = [];
			// var area = 0;
			var inum=0;

			var normal = new THREE.Vector3();

			var result;

			var groupCount = 0;
			var startVertex = 0;
			var endVertex = 0;

			while ( ( result = patternSolid.exec( data ) ) !== null ) {

				startVertex = endVertex;

				var solid = result[ 0 ];

				while ( ( result = patternFace.exec( solid ) ) !== null ) {

					var vertexCountPerFace = 0;
					var normalCountPerFace = 0;

					var text = result[ 0 ];

					while ( ( result = patternNormal.exec( text ) ) !== null ) {

						normal.x = parseFloat( result[ 1 ] );
						normal.y = parseFloat( result[ 2 ] );
						normal.z = parseFloat( result[ 3 ] );
						normalCountPerFace ++;

					}

					while ( ( result = patternVertex.exec( text ) ) !== null ) {

						// console.log(++inum);

						// var vb = parseFloat( result[ 2 ] );
						// var vc =  parseFloat( result[ 3 ] );

						// https://stackoverflow.com/questions/29839777/how-to-use-three-triangle-in-three-js

						// var t = new THREE.Triangle(va,vb,vc);
						
						// area = area + t.getArea();
						// console.log(area);
						// vertices.push( va, vb, vc );

						vertices.push( parseFloat( result[ 1 ] ), parseFloat( result[ 2 ] ), parseFloat( result[ 3 ] ) );
						
						normals.push( normal.x, normal.y, normal.z );
						colors.push( 0.7450980392156863, 0.7450980392156863, 0.7450980392156863 );
						vertexCountPerFace ++;
						endVertex ++;

					}

					// every face have to own ONE valid normal

					if ( normalCountPerFace !== 1 ) {

						console.error( 'THREE.STLLoader: Что-то не так с нормалью грани ' + faceCounter );

					}

					// each face have to own THREE valid vertices

					if ( vertexCountPerFace !== 3 ) {

						console.error( 'THREE.STLLoader: Что-то не так с числом вершин грани ' + faceCounter );

					}

					faceCounter ++;

				}

				var start = startVertex;
				var count = endVertex - startVertex;

				geometry.addGroup( start, count, groupCount );
				groupCount ++;

			}

			geometry.setAttribute( 'position', new THREE.Float32BufferAttribute( vertices, 3 ) );
			geometry.setAttribute( 'normal', new THREE.Float32BufferAttribute( normals, 3 ) );
			geometry.setAttribute( 'color', new THREE.Float32BufferAttribute( colors, 3 ) );

			// console.log("area "+ area);

			return geometry;

		}

		function ensureString( buffer ) {

			if ( typeof buffer !== 'string' ) {

				return THREE.LoaderUtils.decodeText( new Uint8Array( buffer ) );

			}

			return buffer;

		}

		function ensureBinary( buffer ) {

			if ( typeof buffer === 'string' ) {

				var array_buffer = new Uint8Array( buffer.length );
				for ( var i = 0; i < buffer.length; i ++ ) {

					array_buffer[ i ] = buffer.charCodeAt( i ) & 0xff; // implicitly assumes little-endian

				}

				return array_buffer.buffer || array_buffer;

			} else {

				return buffer;

			}

		}

		// start

		var binData = ensureBinary( data );

		return isBinary( binData ) ? parseBinary( binData ) : parseASCII( ensureString( data ) );

	}

} );
