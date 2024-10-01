/* Estilos gerais */
body {
    margin: 0;
    font-family: 'Arial', sans-serif;
    background-color: #E6E6FA; /* Fundo lilás claro */
    color: #4B0082; /* Texto roxo escuro */
}

/* Estilo do título 3D */
h1 {
    font-size: 4em;
    color: #6b0972;
    text-align: center;
    margin-top: 80px;
    text-shadow: 
        2px 2px 0px #9370DB, 
        4px 4px 0px #0e0713, 
        6px 6px 0px #BA55D3; /* Efeito 3D no texto */
    letter-spacing: 5px;
}

/* Estilo do menu */
nav {
    background-color: #8A2BE2; /* Roxo vibrante para o menu */
    padding: 10px;
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    padding: 0;
    margin: 0;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    text-decoration: none;
    color: #fcf6fe; /* Tom creme para contraste */
    font-size: 1.2em;
    font-weight: bold;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background 0.3s;
}

nav ul li a:hover {
    background-color: #f8f5f8; /* Lilás suave no hover */
    color: #4B0082;
}

/* Estilo do conteúdo principal */
main {
    padding: 20px;
    text-align: center;
    background-color: #ececf1; /* Fundo claro para o conteúdo */
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

/* Responsividade para telas menores */
@media (max-width: 400px) {
    nav ul {
        flex-direction: column;
    }
    
    nav ul li {
        margin-bottom: 10px;
    }
}
