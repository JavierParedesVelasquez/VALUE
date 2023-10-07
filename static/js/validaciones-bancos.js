document.addEventListener("DOMContentLoaded", function () {
  const bcpsInput = document.getElementById("bcps");
  const bcpdInput = document.getElementById("bcpd");
  const intersInput = document.getElementById("inters");
  const interdInput = document.getElementById("interd");
  const bbvasInput = document.getElementById("bbvas");
  const bbvadInput = document.getElementById("bbvad");
  const scotsInput = document.getElementById("scots");
  const scotdInput = document.getElementById("scotd");
  // BCP EN SOLES
  bcpsInput.addEventListener("input", function () {
    // Obtiene el valor del input de usuario y lo limpia de espacios en blanco al inicio y al final.
    const valor = this.value.trim();

    // Verifica si el valor del input de usuario cumple con las condiciones de longitud y caracteres permitidos.
    if (valor.length > 14) {
      // Si el valor del input de usuario no cumple con las condiciones, agrega la clase 'is-invalid' para mostrar un borde rojo y quita la clase 'is-valid' si la tenía.
      this.classList.add("is-invalid");
      this.classList.remove("is-valid");

      // Muestra el icono de 'x' rojo dentro del elemento 'invalid-feedback'.
      const icono = this.parentElement.querySelector(
        ".invalid-feedback .bi-x-circle-fill"
      );
      icono.classList.remove("d-none");
    } else {
      // Si el valor del input de usuario cumple con las condiciones, agrega la clase 'is-valid' para mostrar un borde verde y quita la clase 'is-invalid' si la tenía.
      this.classList.add("is-valid");
      this.classList.remove("is-invalid");

      // Oculta el icono de 'x' rojo dentro del elemento 'invalid-feedback'.
      const icono = this.parentElement.querySelector(
        ".invalid-feedback .bi-x-circle-fill"
      );
      icono.classList.add("d-none");
    }
  });
  // BCP EN DOLARES
  bcpdInput.addEventListener("input", function () {
    // Obtiene el valor del input de usuario y lo limpia de espacios en blanco al inicio y al final.
    const valor = this.value.trim();

    // Verifica si el valor del input de usuario cumple con las condiciones de longitud y caracteres permitidos.
    if (valor.length > 14) {
      // Si el valor del input de usuario no cumple con las condiciones, agrega la clase 'is-invalid' para mostrar un borde rojo y quita la clase 'is-valid' si la tenía.
      this.classList.add("is-invalid");
      this.classList.remove("is-valid");

      // Muestra el icono de 'x' rojo dentro del elemento 'invalid-feedback'.
      const icono = this.parentElement.querySelector(
        ".invalid-feedback .bi-x-circle-fill"
      );
      icono.classList.remove("d-none");
    } else {
      // Si el valor del input de usuario cumple con las condiciones, agrega la clase 'is-valid' para mostrar un borde verde y quita la clase 'is-invalid' si la tenía.
      this.classList.add("is-valid");
      this.classList.remove("is-invalid");

      // Oculta el icono de 'x' rojo dentro del elemento 'invalid-feedback'.
      const icono = this.parentElement.querySelector(
        ".invalid-feedback .bi-x-circle-fill"
      );
      icono.classList.add("d-none");
    }
  });
  // INTERBANK EN SOLES
  intersInput.addEventListener("input", function () {
    // Obtiene el valor del input de usuario y lo limpia de espacios en blanco al inicio y al final.
    const valor = this.value.trim();

    // Verifica si el valor del input de usuario cumple con las condiciones de longitud y caracteres permitidos.
    if (valor.length > 14) {
      // Si el valor del input de usuario no cumple con las condiciones, agrega la clase 'is-invalid' para mostrar un borde rojo y quita la clase 'is-valid' si la tenía.
      this.classList.add("is-invalid");
      this.classList.remove("is-valid");

      // Muestra el icono de 'x' rojo dentro del elemento 'invalid-feedback'.
      const icono = this.parentElement.querySelector(
        ".invalid-feedback .bi-x-circle-fill"
      );
      icono.classList.remove("d-none");
    } else {
      // Si el valor del input de usuario cumple con las condiciones, agrega la clase 'is-valid' para mostrar un borde verde y quita la clase 'is-invalid' si la tenía.
      this.classList.add("is-valid");
      this.classList.remove("is-invalid");

      // Oculta el icono de 'x' rojo dentro del elemento 'invalid-feedback'.
      const icono = this.parentElement.querySelector(
        ".invalid-feedback .bi-x-circle-fill"
      );
      icono.classList.add("d-none");
    }
  });
  // INTERBANK EN DOLARES
  interdInput.addEventListener("input", function () {
    // Obtiene el valor del input de usuario y lo limpia de espacios en blanco al inicio y al final.
    const valor = this.value.trim();

    // Verifica si el valor del input de usuario cumple con las condiciones de longitud y caracteres permitidos.
    if (valor.length > 14) {
      // Si el valor del input de usuario no cumple con las condiciones, agrega la clase 'is-invalid' para mostrar un borde rojo y quita la clase 'is-valid' si la tenía.
      this.classList.add("is-invalid");
      this.classList.remove("is-valid");

      // Muestra el icono de 'x' rojo dentro del elemento 'invalid-feedback'.
      const icono = this.parentElement.querySelector(
        ".invalid-feedback .bi-x-circle-fill"
      );
      icono.classList.remove("d-none");
    } else {
      // Si el valor del input de usuario cumple con las condiciones, agrega la clase 'is-valid' para mostrar un borde verde y quita la clase 'is-invalid' si la tenía.
      this.classList.add("is-valid");
      this.classList.remove("is-invalid");

      // Oculta el icono de 'x' rojo dentro del elemento 'invalid-feedback'.
      const icono = this.parentElement.querySelector(
        ".invalid-feedback .bi-x-circle-fill"
      );
      icono.classList.add("d-none");
    }
  });
  // BBVA EN SOLES
  bbvasInput.addEventListener("input", function () {
    // Obtiene el valor del input de usuario y lo limpia de espacios en blanco al inicio y al final.
    const valor = this.value.trim();

    // Verifica si el valor del input de usuario cumple con las condiciones de longitud y caracteres permitidos.
    if (valor.length > 14) {
      // Si el valor del input de usuario no cumple con las condiciones, agrega la clase 'is-invalid' para mostrar un borde rojo y quita la clase 'is-valid' si la tenía.
      this.classList.add("is-invalid");
      this.classList.remove("is-valid");

      // Muestra el icono de 'x' rojo dentro del elemento 'invalid-feedback'.
      const icono = this.parentElement.querySelector(
        ".invalid-feedback .bi-x-circle-fill"
      );
      icono.classList.remove("d-none");
    } else {
      // Si el valor del input de usuario cumple con las condiciones, agrega la clase 'is-valid' para mostrar un borde verde y quita la clase 'is-invalid' si la tenía.
      this.classList.add("is-valid");
      this.classList.remove("is-invalid");

      // Oculta el icono de 'x' rojo dentro del elemento 'invalid-feedback'.
      const icono = this.parentElement.querySelector(
        ".invalid-feedback .bi-x-circle-fill"
      );
      icono.classList.add("d-none");
    }
  });
  // BBVA EN DOLARES
  bbvadInput.addEventListener("input", function () {
    // Obtiene el valor del input de usuario y lo limpia de espacios en blanco al inicio y al final.
    const valor = this.value.trim();

    // Verifica si el valor del input de usuario cumple con las condiciones de longitud y caracteres permitidos.
    if (valor.length > 14) {
      // Si el valor del input de usuario no cumple con las condiciones, agrega la clase 'is-invalid' para mostrar un borde rojo y quita la clase 'is-valid' si la tenía.
      this.classList.add("is-invalid");
      this.classList.remove("is-valid");

      // Muestra el icono de 'x' rojo dentro del elemento 'invalid-feedback'.
      const icono = this.parentElement.querySelector(
        ".invalid-feedback .bi-x-circle-fill"
      );
      icono.classList.remove("d-none");
    } else {
      // Si el valor del input de usuario cumple con las condiciones, agrega la clase 'is-valid' para mostrar un borde verde y quita la clase 'is-invalid' si la tenía.
      this.classList.add("is-valid");
      this.classList.remove("is-invalid");

      // Oculta el icono de 'x' rojo dentro del elemento 'invalid-feedback'.
      const icono = this.parentElement.querySelector(
        ".invalid-feedback .bi-x-circle-fill"
      );
      icono.classList.add("d-none");
    }
  });
  // SCOTIABANK EN SOLES
  scotsInput.addEventListener("input", function () {
    // Obtiene el valor del input de usuario y lo limpia de espacios en blanco al inicio y al final.
    const valor = this.value.trim();

    // Verifica si el valor del input de usuario cumple con las condiciones de longitud y caracteres permitidos.
    if (valor.length > 14) {
      // Si el valor del input de usuario no cumple con las condiciones, agrega la clase 'is-invalid' para mostrar un borde rojo y quita la clase 'is-valid' si la tenía.
      this.classList.add("is-invalid");
      this.classList.remove("is-valid");

      // Muestra el icono de 'x' rojo dentro del elemento 'invalid-feedback'.
      const icono = this.parentElement.querySelector(
        ".invalid-feedback .bi-x-circle-fill"
      );
      icono.classList.remove("d-none");
    } else {
      // Si el valor del input de usuario cumple con las condiciones, agrega la clase 'is-valid' para mostrar un borde verde y quita la clase 'is-invalid' si la tenía.
      this.classList.add("is-valid");
      this.classList.remove("is-invalid");

      // Oculta el icono de 'x' rojo dentro del elemento 'invalid-feedback'.
      const icono = this.parentElement.querySelector(
        ".invalid-feedback .bi-x-circle-fill"
      );
      icono.classList.add("d-none");
    }
  });
  // SCOTIABANK EN DOLARES
  scotdInput.addEventListener("input", function () {
    // Obtiene el valor del input de usuario y lo limpia de espacios en blanco al inicio y al final.
    const valor = this.value.trim();

    // Verifica si el valor del input de usuario cumple con las condiciones de longitud y caracteres permitidos.
    if (valor.length > 14) {
      // Si el valor del input de usuario no cumple con las condiciones, agrega la clase 'is-invalid' para mostrar un borde rojo y quita la clase 'is-valid' si la tenía.
      this.classList.add("is-invalid");
      this.classList.remove("is-valid");

      // Muestra el icono de 'x' rojo dentro del elemento 'invalid-feedback'.
      const icono = this.parentElement.querySelector(
        ".invalid-feedback .bi-x-circle-fill"
      );
      icono.classList.remove("d-none");
    } else {
      // Si el valor del input de usuario cumple con las condiciones, agrega la clase 'is-valid' para mostrar un borde verde y quita la clase 'is-invalid' si la tenía.
      this.classList.add("is-valid");
      this.classList.remove("is-invalid");

      // Oculta el icono de 'x' rojo dentro del elemento 'invalid-feedback'.
      const icono = this.parentElement.querySelector(
        ".invalid-feedback .bi-x-circle-fill"
      );
      icono.classList.add("d-none");
    }
  });
});





