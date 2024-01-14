menu_canvas = document.getElementById("menu");

const r = new rive.Rive({
    src: `${wp_localization.templateUrl}/assets/animations/menu.riv`,
    // OR the path to a discoverable and public Rive asset
    // src: '/public/example.riv',
    canvas: menu_canvas,
    autoplay: true,
    stateMachines: "Main",
    onLoad: () => {
        r.resizeDrawingSurfaceToCanvas();
    },
});

function onRiveEventReceived(riveEvent) {
    const eventData = riveEvent.data;
    const eventProperties = eventData.properties;
    if (eventData.type === rive.RiveEventType.General) {
      switch (eventData.name) {
        case "hoverOn":
            menu_canvas.classList.add("cursor-pointer");
            break;
        case "hoverOff":
            menu_canvas.classList.remove("cursor-pointer");
            break;
        default:
            break;
      }
    } else if (eventData.type === rive.RiveEventType.OpenUrl) {
        console.log(eventData.url);
        window.location.href = eventData.url;
    }
  }
  
  // Add event listener and provide callback to handle Rive Event
  r.on(rive.EventType.RiveEvent, onRiveEventReceived);