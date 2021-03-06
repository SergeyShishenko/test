// https://threejsfundamentals.org/threejs/lessons/ru/threejs-cameras.html
// !other\THREEJS\STLloader\js\script-boxBound.js
var container, camera, scene, renderer;
var cube, mesh;
var controls;
var boxHelper;
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
    
    

    camera = new THREE.PerspectiveCamera (20, width/height, 0.1, 10000);
    // camera.position.y = 500;
    // camera.position.x = 400; 
    // camera.position.z = -400;
    camera.position.y = 200;
    camera.position.x = 400;
 
    camera.position.z = -200;
   
    
    // camera.lookAt (new THREE.Vector3(0,0,0));

    controls = new THREE.OrbitControls (camera, renderer.domElement);
    
    // var gridXZ = new THREE.GridHelper(100, 10);
   
    // scene.add(gridXZ);
    // scene.add(new THREE.AmbientLight(0xffffff, 1.0));

var sizeBound = new THREE.Vector3(4, 4, 4);
// var sizeBound = new THREE.Vector3(200, 200, 200);

var b = new THREE.Mesh(new THREE.BoxBufferGeometry(sizeBound.x, sizeBound.y, sizeBound.z), new THREE.MeshBasicMaterial());
boxHelper = new THREE.BoxHelper(b,0x03fc2c );

scene.add(boxHelper);

}



input.addEventListener( 'change', function( event ) {
  var file = this.files[ 0 ];
  var reader = new FileReader();
  reader.addEventListener( 'load', function ( event ) {
      var contents = event.target.result;
 
        var loader = new THREE.STLLoader();
  
  geometry = loader.parse( contents )

    material = new THREE.MeshNormalMaterial();

    mesh = new THREE.Mesh(geometry, material);

    scaleToFit(mesh, sizeBound); // умещаем в заданные размеры

    let b = new THREE.Box3().setFromObject(mesh);
    mesh.position.sub(b.getCenter()); // центрируем
    // mesh.position.y -= (sizeBound.y - b.getSize().y) * 0.5; // опускаем к "полу"

    
    scene.add(mesh);
    camera.position.y = 5;
    camera.position.x = 10;
 
    camera.position.z = -5;
    controls.autoRotate =false;
    // boxHelper.material.color.set(0x000000);
    boxHelper.visible=false;
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
    controls.update();
    requestAnimationFrame ( animate );  
    renderer.render (scene, camera);
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

window.addEventListener( 'resize', onWindowResize );

// const hemisphereButton = document.getElementById('hemisphereButton');
// hemisphereButton.addEventListener('click', function () {

//     var loader = new THREE.STLLoader();
//     loader.load(stl, function (geometry) {

//         material = new THREE.MeshNormalMaterial();

//         mesh = new THREE.Mesh(geometry, material);

//         mesh.position.set(0, 0, 0);
//         scene.add(mesh);
//         animate();

//     });
// });



controls = new THREE.OrbitControls( camera, renderer.domElement );
controls.enableDamping = true;
controls.dampingFactor = 0.25;
controls.enableZoom = true;
controls.autoRotate = true;
// controls.autoRotate = false;



