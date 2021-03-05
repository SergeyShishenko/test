// https://threejsfundamentals.org/threejs/lessons/ru/threejs-cameras.html
var container, camera, scene, renderer;
var cube, mesh;
var controls;

init();
animate();

function init(){

  // container = document.createElement("div");
  // document.body.appendChild(container);

  var container = document.getElementById('canvas');
    renderer = new THREE.WebGLRenderer( {antialias:true} );
    var width = window.innerWidth;
    var height = window.innerHeight;
    renderer.setSize (width, height);
    document.body.appendChild (renderer.domElement);

    scene = new THREE.Scene();
    
    // var cubeGeometry = new THREE.BoxGeometry (10,10,10);
    // var cubeMaterial = new THREE.MeshBasicMaterial ({color: 0x1ec876});
    // cube = new THREE.Mesh (cubeGeometry, cubeMaterial);

    // cube.position.set (0, 0, 0);
    // scene.add (cube);
    var loader = new THREE.STLLoader();
    // var stl="DW-1274(800)-010R.stl";
    // var stl="DW-1274(800)-009.stl";
    var stl="box.stl";
    // var stl="DW-1270-007R.stl";
    loader.load(stl, function(geometry) {
      // material = new THREE.MeshPhongMaterial({ color: 0xff5533 });
      // material = new THREE.MeshBasicMaterial ({color: 0x1ec876});
      material = new THREE.MeshNormalMaterial();
  
      mesh = new THREE.Mesh(geometry, material);
      // mesh.scale.set(0.01,0.01,0.01);
      // mesh.scale.set(0.1,0.1,0.1);
      mesh.position.set (0, 0, 0);
      scene.add(mesh);
      renderer.render(scene, camera);
    });

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

    camera = new THREE.PerspectiveCamera (45, width/height, 0.1, 1000);
    camera.position.y = 400;
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
alert('click');
				} );



controls = new THREE.OrbitControls( camera, renderer.domElement );
controls.enableDamping = true;
controls.dampingFactor = 0.25;
controls.enableZoom = true;
// controls.autoRotate = true;
controls.autoRotate = false;