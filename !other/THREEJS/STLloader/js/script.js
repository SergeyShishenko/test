var container, camera, scene, renderer;

init();
animate();

function init() {
  container = document.createElement("div");
  document.body.appendChild(container);

  // renderer

  renderer = new THREE.WebGLRenderer({ antialias: true });
  renderer.setSize(window.innerWidth, window.innerHeight);
  container.appendChild(renderer.domElement);

  // scene

  scene = new THREE.Scene();

  // camera

  camera = new THREE.PerspectiveCamera(
    75,
    window.innerWidth / window.innerHeight,
    0.1,
    10000
  );
  const controls = new OrbitControls( camera, renderer.domElement );
  // camera.position.set(3, 0.5, 3);
  camera.position.set( 0, 20, 100 );
  controls.update();
  // camera.position.set(0, 0, 100);
  scene.add(camera); // required, because we are adding a light as a child of the camera

  // lights

  scene.add(new THREE.AmbientLight(0x222222));

  var light = new THREE.PointLight(0xffffff, 0.8);
  camera.add(light);

  // object

  var loader = new THREE.STLLoader();
  // var stl="DW-1274(800)-010R.stl";
  // var stl="DW-1274(800)-009.stl";
  var stl="box.stl";
  loader.load(stl, function(geometry) {
    var material = new THREE.MeshPhongMaterial({ color: 0xff5533 });

    var mesh = new THREE.Mesh(geometry, material);
    // mesh.scale.set(0.01,0.01,0.01);
    // mesh.scale.set(0.1,0.1,0.1);

    scene.add(mesh);
    renderer.render(scene, camera);
  });

  window.addEventListener("resize", onWindowResize, false);
}

function onWindowResize() {
  camera.aspect = window.innerWidth / window.innerHeight;

  camera.updateProjectionMatrix();

  // renderer.setSize(window.innerWidth, window.innerHeight);
}

function animate() {
  requestAnimationFrame(animate);
  controls.update();
  render();
}

function render() {
  var timer = Date.now() * 0.0005;

  camera.position.x = Math.cos(timer) * 5;
  camera.position.y = Math.sin(timer) * 5;
  // camera.position.z = Math.sin(timer) * 5;

  camera.lookAt(scene.position);

  renderer.render(scene, camera);
}