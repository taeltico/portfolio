# 1 - objetivo: api que disponibiliza consulta de criacao
# 2 - url base - localhost 
# 3 - end points 
#   - localhost/livros(get)
#   - localhost/livros/id(get)
#   - localhost/livros/id(put)
#   - localhost/livros/id(delete)
# 4 - quais recursos - livros

from flask import Flask, jsonify, Request

app = Flask(__name__)

livros = [
    {
        'id': 1,
        'Título': 'Orfanato da Senhora peregrine para criancas peculiares',
        'autor': 'desconheço'
    },
    {
        'id': 2,
        'Título': 'Eu sou o numero 4',
        'autor': 'desconheço'
    },
    {

        'id': 3,
        'Título': 'Eragon - saga a Herança',
        'autor': 'desconheço'
    },

]

#consultar(todos)
@app.route('/livros', methods=['GET'])
def obterLivros():
    return jsonify(livros)
#consultar (Id)
@app.route('livros/<int:id>', methods=['GET'])
def obterLivroPorId():
    for livro in livros:
      if livro.get('id') == id:
            return jsonify(livro)
#Editar
@app.route('/livros', methods=['GET'])
def editarLivrosPorId(id):
    livroAlterado = request.get_json()
    for indice,livro in enumerate(livros):
        if livro.get('id') == id:
            livros[indice.update(livroAlterado)]

#excluir
app.run(port=5000, host='localhost', debug=True)