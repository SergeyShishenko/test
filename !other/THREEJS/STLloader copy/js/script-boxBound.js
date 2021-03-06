// https://threejsfundamentals.org/threejs/lessons/ru/threejs-cameras.html
// !other\THREEJS\STLloader\js\script-boxBound.js
var container, camera, scene, renderer;
var cube, mesh;
var controls;
var boxHelper;
var light;
// var stl="box.stl";
var input = document.querySelector('#STL');
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

    // scene.add( new THREE.HemisphereLight( 0x443333, 0x111122 ) );

    addShadowedLight( 1, 1, 1, 0xffffff, 1.35 );
    // addShadowedLight( -1, -1, -1, 0xdddd00, 1 );
    addShadowedLight( 0.5, 1, - 1, 0xffaa00, 1 );




    camera = new THREE.PerspectiveCamera (20, width/height, 0.1, 50000);   
    camera.position.y = 200;
    camera.position.x = 400;
 
    camera.position.z = -200;


    controls = new THREE.OrbitControls (camera, renderer.domElement);
 

var sizeBound = new THREE.Vector3(4, 4, 4);


var b = new THREE.Mesh(new THREE.BoxBufferGeometry(sizeBound.x, sizeBound.y, sizeBound.z), new THREE.MeshBasicMaterial());
boxHelper = new THREE.BoxHelper(b,0x03fc2c );

scene.add(boxHelper);



				setupInset();

}



input.addEventListener( 'change', function( event ) {
  
  var file = this.files[ 0 ];
  var reader = new FileReader();
  reader.addEventListener( 'load', function ( event ) {
      var contents = event.target.result;
 
        var loader = new THREE.STLLoader();
  
  geometry = loader.parse( contents )

  // var  material = new THREE.MeshNormalMaterial();
  
   var material = new THREE.MeshPhongMaterial( { color: 0xff5533, specular: 0x111111, shininess: 200, side: THREE.DoubleSide } );
    // var  material = new THREE.MeshPhongMaterial( { color: 0xAAAAAA, specular: 0x111111, shininess: 200 , side: THREE.DoubleSide} );
    
    removeEntity();
    mesh = new THREE.Mesh(geometry, material);
    mesh.name = 'nameMeshObject';

    scaleToFit(mesh, sizeBound); // умещаем в заданные размеры

    let b = new THREE.Box3().setFromObject(mesh);
    mesh.position.sub(b.getCenter()); // центрируем
    // mesh.position.y -= (sizeBound.y - b.getSize().y) * 0.5; // опускаем к "полу"

    
    scene.add(mesh);
    // camera.position.y = 5;
    // camera.position.x = 10; 
    // camera.position.z = -5;
    camera.position.y = 0;
    camera.position.x = 0; 
    camera.position.z = 15;

    controls.autoRotate =false; 
    boxHelper.visible=false;

    // camera.position.z = -400;

    // camera.up.set(0, 0, 1);    
    //  camera.lookAt (new THREE.Vector3(0,0,1));

    animate();
  
  }, false );
  if ( reader.readAsBinaryString !== undefined ) {
      reader.readAsBinaryString( file );
  } else {
      reader.readAsArrayBuffer( file );
  }
} );




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
    scene.add( directionalLight );

    directionalLight.castShadow = true;

    const d = 1;
    directionalLight.shadow.camera.left = - d;
    directionalLight.shadow.camera.right = d;
    directionalLight.shadow.camera.top = d;
    directionalLight.shadow.camera.bottom = - d;
    // directionalLight.shadow.camera.left = d;
    // directionalLight.shadow.camera.right = d;
    // directionalLight.shadow.camera.top = d;
    // directionalLight.shadow.camera.bottom = d;

    directionalLight.shadow.camera.near = 1;
    directionalLight.shadow.camera.far = 4;

    directionalLight.shadow.bias = - 0.002;

  }

//  var removeEnt = document.getElementById('removeEnt');
// removeEnt.addEventListener('click',   removeEntity() ); 

function removeEntity() { 
  //  alert(scene.children.length);
    scene.remove( scene.children[3]);//mesh
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
  camera2.up = camera.up; // important!

  // axes
  axes2 = new THREE.AxesHelper( 100 );
  scene2.add( axes2 );

}



