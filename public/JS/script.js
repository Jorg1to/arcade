// Función para manejar el comportamiento de la tarjeta
function handleCard(cardId) {
    var card = document.getElementById(cardId);
  
    // Agregar evento de mouseover para iluminar y cambiar el borde de la tarjeta
    card.addEventListener("mouseover", function() {
      card.style.transition = "transform 0.5s, border-color 1s"; // Ajustar la transición
      card.style.transform = "scale(1.05)"; // Agrandar la tarjeta un poco
      card.style.borderColor = "purple"; // Cambiar el color del borde a morado
    });
  
    // Agregar evento de mouseout para volver a su estado original
    card.addEventListener("mouseout", function() {
      card.style.transition = "transform 0.5s, border-color 1s"; // Ajustar la transición
      card.style.transform = ""; // Restablecer el tamaño de la tarjeta
      card.style.borderColor = "transparent"; // Restablecer el color del borde
    });
  }
  
  // Llamar a la función para cada tarjeta
  handleCard("miCard");
  handleCard("miCard2");
  handleCard("miCard3");
  handleCard("miCard4");
  handleCard("miCard5");
  handleCard("miCard6");

  // Repite esto para cada tarjeta que tengas
  