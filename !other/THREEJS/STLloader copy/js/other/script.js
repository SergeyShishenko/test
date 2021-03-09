// https://threejsfundamentals.org/threejs/lessons/ru/threejs-cameras.html
var container, camera, scene, renderer;
var cube, mesh;
var controls;
// var stl="box.stl";
var input = document.querySelector('#STL');
init();
animate();

function init(){

  // container = document.createElement("div");
  // document.body.appendChild(container);

  var container = document.getElementById('canvas');
    renderer = new THREE.WebGLRenderer( {antialias:true} );
    var width = window.innerWidth;
    var height = window.innerHeight-250;
    renderer.setSize (width, height);
    document.body.appendChild (renderer.domElement);

    scene = new THREE.Scene();
    
    // var cubeGeometry = new THREE.BoxGeometry (10,10,10);
    // var cubeMaterial = new THREE.MeshBasicMaterial ({color: 0x1ec876});
    // cube = new THREE.Mesh (cubeGeometry, cubeMaterial);

    // cube.position.set (0, 0, 0);
    // scene.add (cube);
    // var loader = new THREE.STLLoader();
    // var stl="DW-1274(800)-010R.stl";
    // var stl="DW-1274(800)-009.stl";
    
    // var stl="DW-1270-007R.stl";
    // loader.load(stl, function(geometry) {
    //   // material = new THREE.MeshPhongMaterial({ color: 0xff5533 });
    //   // material = new THREE.MeshBasicMaterial ({color: 0x1ec876});
    //   material = new THREE.MeshNormalMaterial();
  
    //   mesh = new THREE.Mesh(geometry, material);
    //   // mesh.scale.set(0.01,0.01,0.01);
    //   // mesh.scale.set(0.1,0.1,0.1);
    //   mesh.position.set (0, 0, 0);
    //   scene.add(mesh);
    //   renderer.render(scene, camera);
    // });

    	// lights

      // var light = new THREE.DirectionalLight( 0xffffff );
      // light.position.set( 10, 10, 10 );
      // scene.add( light );

      // light = new THREE.DirectionalLight( 0x002288 );
      // light.position.set( -10, -10, -10 );
      // scene.add( light );

      // light = new THREE.AmbientLight( 0x222222 );
      // scene.add( light );

      //
      // renderer.render(scene, camera);

    camera = new THREE.PerspectiveCamera (20, width/height, 0.1, 10000);
    camera.position.y = 500;
    camera.position.x = 400;
    // camera.position.y = 160;
    camera.position.z = -400;
    // camera.up.set(0, 0, -1);
    
    camera.lookAt (new THREE.Vector3(0,0,0));

    controls = new THREE.OrbitControls (camera, renderer.domElement);
    
    var gridXZ = new THREE.GridHelper(100, 10);
    // gridXZ.setColors( new THREE.Color(0xff0000), new THREE.Color(0xffffff) );
    scene.add(gridXZ);

}


// input.addEventListener('change', () => {
  

//   file = input.files[0];

//   alert(file.exists);
//   var loader = new THREE.STLLoader();
//   loader.load(file.name, function (geometry) {

//     material = new THREE.MeshNormalMaterial();

//     mesh = new THREE.Mesh(geometry, material);

//     mesh.position.set(0, 0, 0);
//     scene.add(mesh);
//     animate();



//   });
// });

input.addEventListener( 'change', function( event ) {
  var file = this.files[ 0 ];
  var reader = new FileReader();
  reader.addEventListener( 'load', function ( event ) {
      var contents = event.target.result;
      // var geometry = new STLLoader().parse( contents );
      // var material = new THREE.MeshStandardMaterial();
      // var mesh = new THREE.Mesh( geometry, material );
      // mesh.castShadow = true;
      // mesh.receiveShadow = true;
      // scene.add( mesh );
      // alert(contents);
        var loader = new THREE.STLLoader();
  // loader.load(contents, function (geometry) {});
  geometry = loader.parse( contents )

    material = new THREE.MeshNormalMaterial();

    mesh = new THREE.Mesh(geometry, material);

    mesh.position.set(0, 0, 0);
    scene.add(mesh);
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

window.addEventListener( 'resize', onWindowResize );

				const hemisphereButton = document.getElementById( 'hemisphereButton' );
				hemisphereButton.addEventListener( 'click', function () {

					// hemiLight.visible = ! hemiLight.visible;
					// hemiLightHelper.visible = ! hemiLightHelper.visible;
// alert(stl);
var loader = new THREE.STLLoader();
loader.load(stl, function(geometry) {
  // material = new THREE.MeshPhongMaterial({ color: 0xff5533 });
  // material = new THREE.MeshBasicMaterial ({color: 0x1ec876});
  material = new THREE.MeshNormalMaterial();

  mesh = new THREE.Mesh(geometry, material);
  // mesh.scale.set(0.01,0.01,0.01);
  // mesh.scale.set(0.1,0.1,0.1);
  mesh.position.set (0, 0, 0);
  scene.add(mesh);
  animate();
  // renderer.render(scene, camera);
});
				} );



controls = new THREE.OrbitControls( camera, renderer.domElement );
controls.enableDamping = true;
controls.dampingFactor = 0.25;
controls.enableZoom = true;
// controls.autoRotate = true;
controls.autoRotate = false;