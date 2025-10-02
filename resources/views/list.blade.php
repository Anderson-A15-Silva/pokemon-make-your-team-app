<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pokédex | Lista</title>
    <link rel="icon" href="./img/pokeIcon.png">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="m-20 " background="./img/pokeFundo.jpg">
    <main>
        <article class="bg-black flex items-center justify-center text-center text-2xl font-bold text-white h-10">Lista de Times</article>
        <a href="picklist.html">
            <button class="bg-blue-500 text-white flex items-center justify-center text-center text-2xl font-bold w-full h-10 cursor-pointer">Criar um Time</button>
        </a>
        <table class="bg-white w-full">
            <tbody class="text-2xl font-bold ">
                <tr class="bg-gray-300">
                    <th>Nome do time:</th>
                    <th>Pokémons:</th>
                    <th class="flex">Editar <img class=" w-6 h-6 " src="./img/edit-symbol.png " alt="edit-symbol "></th>
                </tr>
                <tr class="bg-white ">
                    <td>Nome do time:</td>
                    <td>Pokémons:</td>
                    <td class="flex">Editar<img class=" w-6 h-6 " src="./img/edit-symbol.png " alt="edit-symbol "></td>
                    <tr class="bg-gray-300 ">
                        <th>Nome do time:</th>

                        <th>Pokémons:</th>
                        <th class="flex">Editar<img class=" w-6 h-6 " src="./img/edit-symbol.png " alt="edit-symbol "></th>
                    </tr>
                    <tr class="bg-white ">
                        <td>Nome do time:</td>
                        <td>Pokémons:</td>
                        <td class="flex"><a href="teamEdit.html">Editar</a><img class=" w-6 h-6 " src="./img/edit-symbol.png " alt="edit-symbol "></td>
                    </tr>
            </tbody>
        </table>
        <a href="{{ route ('pokemon.index') }}" class="text-center justify-center flex text-2xl font-bold bg-blue-500 text-white rounded-[6px] p-3 m-8">RETORNAR PARA A POKEDEX</a>
    </main>
</body>

</html>