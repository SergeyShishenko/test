// https://threejsfundamentals.org/threejs/lessons/ru/threejs-cameras.html
// !other\THREEJS\STLloader\js\script-boxBound.js
var container, camera, scene, renderer;
var cube, mesh;
var controls;
var boxHelper;
var light;
var geometry;
// var stl="box.stl";
// var input = document.querySelector('#STL');
var sizeBound = new THREE.Vector3(4, 4, 4);
init();
animate();

function init(){

  var container = document.getElementById('canvas');
    renderer = new THREE.WebGLRenderer( {antialias:true} );
    var width = window.innerWidth;
    // var height = window.innerHeight-250;
    var height = window.innerHeight;
    renderer.setSize (width, height);
    document.body.appendChild (renderer.domElement);

    scene = new THREE.Scene();
    // scene.background = new THREE.Color( 0x72645b );
    scene.background = new THREE.Color( 0xdddddd );
				// scene.fog = new THREE.Fog( 0x72645b, 2, 15 );
    
    // Lights
    //  light = new THREE.AmbientLight(0xffffff);
    // scene.add( new THREE.AmbientLight(0xffffff) );
    // scene.add(light);

    

    addShadowedLight( 5, 10, 5, 0xffffff, 0.35);// зелёный
    addShadowedLight( 5, 5, 10, 0xffffff, 0.35);// синий
    addShadowedLight( -10, 5, 5, 0xffffff, 0.35 );// красный
    addShadowedLight( 5, 5, -10, 0xffffff, 0.35);// желтый
    // addShadowedLight( 5, 5, 10, 0xffffff, 1.35 ); // голубой
    addShadowedLight( 5, -10, 5, 0xffffff, 0.35 ); // MAGENTA

    // addShadowedLight( -5, 10, -5, 0xffffff, 1 ); // 

    // addShadowedLight( -0.5, -0.5, -0.5, 0xdddd00, 1 );
    // addShadowedLight( -0.5, 0.5, -0.5, 0xdddd00, 1 );

    // // addShadowedLight( 1, 1, 1, 0xffffff, 1.35 );
    // // addShadowedLight( 0.5, 0.5, 0.5, 0xffffff, 1.35 );
    // addShadowedLight( 0.5, 1, - 1, 0xffaa00, 1 );

    // scene.add( new THREE.HemisphereLight( 0x443333, 0x111122 ) );
    
      // scene.add( new THREE.AmbientLight( 0x404040 ) );

    //////////////////////////////////////////////////////////////////////

	// this material causes a mesh to use colors assigned to faces
	// var faceColorMaterial = new THREE.MeshBasicMaterial( 
  //   { color: 0xffffff, vertexColors: THREE.FaceColors } );
    
  //   var sphereGeometry = new THREE.SphereGeometry( 80, 32, 16 );
  //   for ( var i = 0; i < sphereGeometry.faces.length; i++ ) 
  //   {
  //     face = sphereGeometry.faces[ i ];	
  //     face.color.setRGB( 0, 0, 0.8 * Math.random() + 0.2 );		
  //   }
  //   var sphere = new THREE.Mesh( sphereGeometry, faceColorMaterial );
  //   sphere.position.set(0, 50, 0);
  //   scene.add(sphere);
    
  //   targetList.push(sphere);
    
    //////////////////////////////////////////////////////////////////////




    camera = new THREE.PerspectiveCamera (20, width/height, 0.1, 50000);  
      camera.position.y = 200;
    camera.position.x = 400; 
    camera.position.z = -200;


    controls = new THREE.OrbitControls (camera, renderer.domElement);
 

// var sizeBound = new THREE.Vector3(4, 4, 4);
// var sizeBound = new THREE.Vector3(0, 0, 0);


var b = new THREE.Mesh(new THREE.BoxBufferGeometry(sizeBound.x, sizeBound.y, sizeBound.z), new THREE.MeshBasicMaterial());
boxHelper = new THREE.BoxHelper(b,0x03fc2c );

scene.add(boxHelper);


// document.addEventListener( 'mousemove', onDocumentMouseMove, false );

setupInset();

}


input.addEventListener( 'change', () =>  {
    file = input.files[0];
   
    boxHelper.visible=true;
    loadSTL();
    // // Площадь поверхности    
    handleFiles();
} );

function onDocumentMouseMove( event ) 
{
	// the following line would stop any other event handler from firing
	// (such as the mouse's TrackballControls)
	event.preventDefault();
	
	// update the mouse variable
	mouse.x = ( event.clientX / window.innerWidth ) * 2 - 1;
	mouse.y = - ( event.clientY / window.innerHeight ) * 2 + 1;
}

function loadSTL(){
  var reader = new FileReader();
  reader.addEventListener( 'load', function ( event ) {
      var contents = event.target.result; 
      var loader = new THREE.STLLoader();
      
      geometry = loader.parse( contents )
      // uuid,name,type,index,attributes,morphAttributes,morphTargetsRelative,groups,boundingBox,boundingSphere,drawRange,userData
      // console.log('Object.keys(geometry).length '+Object.keys(geometry).length);
      // console.log('Object.keys(geometry) '+Object.keys(geometry));
      // console.log(geometry.attributes['normal']['array'].length);
      // console.log(geometry.getAttribute['normal']);
      // for ( var j = 0; j < geometry.attributes['normal']['array'].length; j=j+3 ) 
      // {
      //   // console.log(j +" "+ geometry.attributes['normal']['array'][j]+" "+geometry.attributes['normal']['array'][j+1]+" "+geometry.attributes['normal']['array'][j+2]	);
      //   // console.log(geometry.attributes['normal']['array'][j]+" "+geometry.attributes['normal']['array'][j+1]+" "+geometry.attributes['normal']['array'][j+2]	);
      // }

      // for ( var i = 0; i < Object.keys(geometry).length; i++ ) 
      // {
       
        
        // console.log(geometry.attributes	);// !!!!
        
      //   // console.log(geometry.attributes.normal.count	);
      //   // console.log(geometry.attributes.groups	);

          // for ( var j = 0; j < geometry.attributes.normal.count; j=j+3 ) 
          // {
          //   console.log(geometry.attributes['normal']['array'][j]+" "+geometry.attributes['normal']['array'][j+1]+" "+geometry.attributes['normal']['array'][j+2]	);
          // }
        
      //   // console.log(geometry.attributes['normal']['array'][0]+" "+geometry.attributes['normal']['array'][1]+" "+geometry.attributes['normal']['array'][2]	);
      // }

      // var  material = new THREE.MeshNormalMaterial();
      
      // var material = new THREE.MeshPhongMaterial( { color: 0xff5533, specular: 0x111111, shininess: 200, side: THREE.DoubleSide } );//,vertexColors: THREE.FaceColors
      // var material = new THREE.MeshPhongMaterial( { color: 0xff5533, specular: 0x111111, shininess: 200, side: THREE.DoubleSide ,vertexColors: THREE.FaceColors} );//
        // var  material = new THREE.MeshPhongMaterial( { color: 0xAAAAAA, specular: 0x111111, shininess: 200 , side: THREE.DoubleSide,vertexColors: THREE.FaceColors} );
        var  material = new THREE.MeshPhongMaterial( { color: 0xFFFFFF, specular: 0x111111, shininess: 200 , side: THREE.DoubleSide,vertexColors: THREE.FaceColors} );
        
        removeEntity();
        mesh = new THREE.Mesh(geometry, material);
        mesh.name = 'nameMeshObject';

        scaleToFit(mesh, sizeBound); // умещаем в заданные размеры

        let b = new THREE.Box3().setFromObject(mesh);
        mesh.position.sub(b.getCenter()); // центрируем
        // mesh.position.getCenter(b); // центрируем
        // mesh.position.y -= (sizeBound.y - b.getSize().y) * 0.5; // опускаем к "полу"

        // camera.up.set(0, 0, 1);    
        //  camera.lookAt (new THREE.Vector3(0,0,1));
        scene.add(mesh);
        
        // camera.position.z = -5;
        
        camera.position.y = 0;
        camera.position.x = 0; 
        camera.position.z = 15;

        

        // controls.autoRotate =false; 
        boxHelper.visible=false;
       
    

      

        animate();
      
    }, false );

    if ( reader.readAsBinaryString !== undefined ) {
        reader.readAsBinaryString( file );
    } else {
        reader.readAsArrayBuffer( file );
    }
}

function animate()
{
    requestAnimationFrame ( animate ); 
    controls.update();

    	//copy position of the camera into inset
      camera2.position.copy( camera.position );
      camera2.position.sub( controls.target );
      camera2.position.setLength( 300 );
      camera2.lookAt( scene2.position );

      renderer.render( scene, camera );
      renderer2.render( scene2, camera2 );

      // stats.update();
     
    
}

function onWindowResize() {

  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();

  renderer.setSize( window.innerWidth, window.innerHeight );

}

function scaleToFit(obj, bound) {
    let box = new THREE.Box3().setFromObject(obj);
    let size = new THREE.Vector3();
    box.getSize(size);
    let vScale = new THREE.Vector3().copy(bound).divide(size);
    let scale = Math.min(vScale.x, Math.min(vScale.y, vScale.z));
    obj.scale.setScalar(scale);
  }

  function addShadowedLight( x, y, z, color, intensity ) {

    const directionalLight = new THREE.DirectionalLight( color, intensity );
    directionalLight.position.set( x, y, z );
    // directionalLight.target.position.set(0, 0, 0);
    scene.add( directionalLight );

    directionalLight.castShadow = true;
    // directionalLight.castShadow = false;

    const d = 1;
    directionalLight.shadow.camera.left = - d;
    directionalLight.shadow.camera.right = d;
    directionalLight.shadow.camera.top = d;
    directionalLight.shadow.camera.bottom = - d;

    

    directionalLight.shadow.camera.near = 1;//1//
    directionalLight.shadow.camera.far = 4;//4

    directionalLight.shadow.bias = - 0.002;

  }

function removeEntity() { 
  //  alert(scene.children.length);
    // scene.remove( scene.children[6]);//mesh
    scene.remove( scene.children[scene.children.length-1]);//mesh
    animate();
  }

window.addEventListener( 'resize', onWindowResize );

controls = new THREE.OrbitControls( camera, renderer.domElement );
controls.enableDamping = true;
controls.dampingFactor = 0.25;
controls.enableZoom = true;
controls.autoRotate = true;
// controls.autoRotate = false;


//////https://threejs.org/examples/webgl_loader_nrrd.html
function setupInset() {

    const insetWidth = 150, insetHeight = 150;
    container2 = document.getElementById( 'inset' );
    container2.width = insetWidth;
    container2.height = insetHeight;

    // renderer
    renderer2 = new THREE.WebGLRenderer( { alpha: true } );
    renderer2.setClearColor( 0x000000, 0 );
    renderer2.setSize( insetWidth, insetHeight );
    container2.appendChild( renderer2.domElement );

    // scene
    scene2 = new THREE.Scene();

    // camera
    camera2 = new THREE.PerspectiveCamera( 50, insetWidth / insetHeight, 1, 1000 );
    // camera2 = new THREE.OrthographicCamera( 45, insetWidth / insetHeight, 1, 1000 );
    camera2.up = camera.up; // important!

    // axes
    axes2 = new THREE.AxesHelper( 100 );
    scene2.add( axes2 );

  }

const dir_ft = document.getElementById('dir_ft');
dir_ft.addEventListener('click', function () {
  camera.position.y = 0;
  camera.position.x = 0;
  camera.position.z = 15;
  animate();
});
const dir_bk = document.getElementById('dir_bk');
dir_bk.addEventListener('click', function () {
  camera.position.y = 0;
  camera.position.x = 0;
  camera.position.z = -15;
  animate();
});
const dir_tp = document.getElementById('dir_tp');
dir_tp.addEventListener('click', function () {
  camera.position.y = 15;
  camera.position.x = 0;
  camera.position.z = 0;
  animate();
});
const dir_bm = document.getElementById('dir_bm');
dir_bm.addEventListener('click', function () {
  camera.position.y = -15;
  camera.position.x = 0;
  camera.position.z = 0;
  animate();
});
const dir_lt = document.getElementById('dir_lt');
dir_lt.addEventListener('click', function () {
  camera.position.y = 0;
  camera.position.x = -15;
  camera.position.z = 0;
  animate();
});
const dir_rt = document.getElementById('dir_rt');
dir_rt.addEventListener('click', function () {
  camera.position.y = 0;
  camera.position.x = 15;
  camera.position.z = 0;
  animate();
});
const dir_g = document.getElementById('dir_g');
dir_g.addEventListener('click', function () {
  camera.position.y = 10;
  camera.position.x = -10;
  camera.position.z = 10;
  animate();
  // console.log("colors "+geometry.attributes['color']['array'].length);
  // var colors = geometry.attributes['color']['array'];
  // console.log("colors "+colors.length);
  
  // for ( var j = 0; j < geometry.attributes.color.count; j=j+3 ) 
  // {
  //   console.log(geometry.attributes['color']['array'][j]+" "+geometry.attributes['color']['array'][j+1]+" "+geometry.attributes['color']['array'][j+2]	);
  // }
   
});



