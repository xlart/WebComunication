import { useState } from "react";
import { useEffect } from "react";
import { styled } from "styled-components";

const App = () => {
  const [title, setTitle] = useState("");
  const [content, setContent] = useState("");
  const [estado, setEstado] = useState("");

  const handleFormSubmit = (event: React.FormEvent) => {
    event.preventDefault();

    fetch("http://127.0.0.1:8000/api/usuarios", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ title, content, estado }),
    })
      .then((response) => response.json())
      .then((data) => {
        console.log("Response:", data);
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  };
  const [card, setCard] = useState([]);

  useEffect(() => {
    fetch("http://127.0.0.1:8000/api/usuarios")
      .then((response) => response.json())
      .then((data) => {
        setCard(data);
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  }, []);
  return (
    <>
      <Wrapper>
        <Divtitulo>
          <Title>CALIFICA AL AYUDANTE</Title>
          <Subtitle>
            Aquí podrás ayudar y comentar qué te pareció el ayudante
          </Subtitle>
        </Divtitulo>
        <FormSection>
          <form onSubmit={handleFormSubmit}>
            <label htmlFor="title">Titulo</label>
            <input
              type="text"
              id="title"
              value={title}
              onChange={(e) => setTitle(e.target.value)}
            />
            <label htmlFor="content">Contenido</label>
            <textarea
              name=""
              id=""
              value={content}
              onChange={(e) => setContent(e.target.value)}
            ></textarea>
            <label>Estado</label>
            <div>
              <input
                type="radio"
                name="estado"
                value="Privado"
                checked={estado === "Privado"}
                onChange={(e) => setEstado(e.target.value)}
              />
              <label htmlFor="estado1">Privado</label>
            </div>
            <div>
              <input
                type="radio"
                name="estado"
                value="Publico"
                checked={estado === "Publico"}
                onChange={(e) => setEstado(e.target.value)}
              />
              <label htmlFor="estado2">Publico</label>
            </div>
            <button type="submit">AGREGAR</button>
          </form>
        </FormSection>
        <CommentSection>
          {card.map((v,i) => (
            <>
              <Divcard key={i}>
                <div>
                  <h3>Jose daniel</h3>
                  <p>SIS</p>
                </div>
                <Divcontenido>
                  <label>{v.titulo}</label>
                  <p>
                    {v.texto}
                    </p>
                  <p>Estado:{v.estado}</p>
                </Divcontenido>
                <button>Comentar</button>
              </Divcard>
            </>
          ))}
        </CommentSection>
      </Wrapper>
    </>
  );
};

export default App;

const Wrapper = styled.section`
  width: 100vw;
  height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;

  background: #5656ea;
`;

const Title = styled.h1`
  font-size: 3.5rem;
  margin-bottom: 1rem;
`;

const Subtitle = styled.h2`
  font-size: 1rem;
  margin-bottom: 1rem;
  text-align: center;
`;

const FormSection = styled.section`
  background: #fff;
  margin: 20px;
  padding: 10px;
  width: 95%;
  display: flex;
  align-items: center;
  justify-content: space-around;
  flex-direction: row;
  margin-bottom: 2rem;
  border-radius: 10px;
  label {
    margin-bottom: 0.5rem;
    font-weight: 700;
  }

  input {
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #000;
    outline: none;

    border-radius: 4px;
  }
  textarea {
    width: 250px;
    height: 80px;
    outline: none;
    padding: 0.5rem;
  }

  input[type="radio"] {
    margin-right: 0.5rem;
  }

  button {
    padding: 0.5rem 1rem;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
`;

const Divcard = styled.div`
  margin: 15px;
  width: 300px;
  min-height: 300px;
  border-radius: 7px;
  border: 1px solid #ccc;
  padding: 20px;
  box-shadow: 2px 3px 10px 1px #c0bfbf;

  div {
    display: flex;
    justify-content: center;
    flex-direction: column;
  }
`;
const Divcontenido = styled.div`
  padding: 10px;
  height: 250px;
  display: flex;
  label {
    margin: 10px;
  }
  p {
    margin: 5px;
  }
`;
const CommentSection = styled.section`
  display: flex;
  flex-direction: row;
  width: 95%;
  margin: 15px;
  height: 65%;
  background: #fff;
  border-radius: 10px;
  overflow: scroll;
`;
const Divtitulo = styled.div`
  height: 35%;
  width: 95%;
  margin: 15px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: #fff;
  border-radius: 10px;
`;
