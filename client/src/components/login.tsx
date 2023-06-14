import React from "react";

const login = () => {
  return (
    <>
      <div id="body">
        <div id="cuerpo">
          <div id="izq">
            <div id="container">
              <div id="carrusel">
                <img
                  id="carru"
                  src="./img/kisspng-cloud-computing-computer-laptop-internet-comunication-5ac8c1927c4984.3460579415231061945091.png"
                  alt=""
                />
              </div>
            </div>
          </div>
          <div id="der">
            <div id="containder">
              <div id="logologin">
                <img id="loguito" src="./img/webcomunication.jpg" alt="" />
                <h2>WebComunication</h2>
              </div>
              <div id="p123">
                <p id="plogin">Si ya tienes cuenta ?</p>

                <button id="btningresar">
                  <a id="inga" href="ingresar.html">
                    inicio de sesion
                  </a>
                </button>
              </div>
              <div id="p1234">
                <p id="plogin">Si aun no tienes cuenta</p>
                <button id="btnlogin">
                  <a href="registro.html">registro</a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default login;
