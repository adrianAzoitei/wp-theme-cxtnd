const r = new rive.Rive({
    src: "https://cdn.rive.app/animations/vehicles.riv",
    // OR the path to a discoverable and public Rive asset
    // src: '/public/example.riv',
    canvas: document.getElementById("menu"),
    autoplay: true,
    stateMachines: "bumpy",
    onLoad: () => {
    r.resizeToCanvas();
    },
});