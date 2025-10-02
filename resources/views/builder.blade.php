<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pokédex | Criar Descrição</title>
    <link rel="icon" href="../public/img/pokeIcon.png">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="m-8" background="./img/pokeFundo.jpg">
    <main class="flex flex-col items-center justify-center ">
        <article class="bg-white flex flex-col items-center justify-center rounded-[6px] ">
            <article class="bg-white flex items-center justify-center text-center text-2xl font-bold w-full h-10 ">Dados do pokémon</article>
            <article class="bg-white flex p-10 m-8 grid grid-cols-2">
                <spam class="flex justify-center">
                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png " alt="bulbasaur ">
                </spam>
                <article class="bg-white flex flex-col items-center justify-center text-center font-bold w-full max-w-md p-4 rounded shadow-lg mt-4">
                    <input type="text" placeholder="Nível do Pokémon" class="border border-gray-300 p-2 mb-2 rounded w-full" />
                    <input type="text" placeholder="Item do Pokémon" class=" border border-gray-300 p-2 mb-2 rounded w-full " />
                    <input type="text " placeholder="Habilidade" class="border border-gray-300 p-2 mb-2 rounded w-full " />
                    <input type="text " placeholder="Natureza" class="border border-gray-300 p-2 mb-2 rounded w-full " />
                    <input type="text " placeholder="Evs" class="border border-gray-300 p-2 mb-2 rounded w-full " />
                    <input type="text " placeholder="Habilidade-1" class="border border-gray-300 p-2 mb-2 rounded w-full " />
                    <input type="text " placeholder="Habilidade-2" class="border border-gray-300 p-2 mb-2 rounded w-full " />
                    <input type="text " placeholder="Habilidade-3" class="border border-gray-300 p-2 mb-2 rounded w-full " />
                    <input type="text " placeholder="Habilidade-4" class="border border-gray-300 p-2 mb-2 rounded w-full " />
                </article>
            </article>
            <article class="bg-white flex p-2 w-full grid grid-cols-2 justify-center items-center text-center">
                <button class="bg-blue-500 text-white rounded-l-[6px] p-2 cursor-pointer">Salvar</button>
                <a href="{{ route('team.create') }}" class="bg-blue-500 text-white rounded-r-[6px] p-2 cursor-pointer">Cancelar</a>
            </article>

        </article>
    </main>
</body>