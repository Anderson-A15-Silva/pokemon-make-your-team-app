<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pokédex | Escolher</title>
    <link rel="icon" href="./img/pokeIcon.png">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="m-20 " background="./img/pokeFundo.jpg">

    <!-- O menu vai aqui  -->
    <main class="bg-white p-1.9 flex flex-col justify-center items-center rounded-t-[45px]">
        <h1 class="bg-red-500 rounded-t-[45px] w-full p-8.5 flex justify-center items-center"> <img src="./img/dexTitle.png" alt="title"> </h1>
        <hr class="w-full bg-gray-700 p-2.5 border border-gray-600 text-center text-white">
        <h2 class="bg-gray-300 text-white rounded-[35px] w-100 p-0.9 m-7.5 flex justify-left items-center">
            <spam class="bg-red-500 rounded-l-[35px] w-1/8 h-10">
                <img class="w-8 p-1 m-1 ml-2.5" src="./img/searchIcon.png" alt="searchIcon">
            </spam>
            <input class="text-black  text-1xl font font-bold p-1 ml-1 outline-none" maxlength="24" placeholder="Barra de busca..."></input>
        </h2>
        <section class=" p-4 grid grid-cols-3 gap-10 ">
            <article class=" bg-white ">
                <article class="bg-gray-300 p-15 rounded border-l-r-4  text-white ">
                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png " alt="bulbasaur ">
                </article>
                <p class="font-bold text-gray-700 "> Nº0001</p>
                <p class="font-bold text-black text-2xl "> Bulbasaur </p>
                <spam class="text-black bg-green-400 rounded p-1 pl-10 pr-10 m-1 "> Grass </spam>
                <spam class="text-white bg-purple-500 rounded p-1 pl-10 pr-10 m-1 "> Poison </spam>
                <a href="{{ route('pokemon.create') }}">
                    <button class="bg-blue-500 text-white rounded p-1 pl-10 pr-10 cursor-pointer">Adicionar</button>
                </a>
            </article>

            <article class="bg-white ">
                <article class="bg-gray-300 p-15 rounded border-l-r-4  text-white ">
                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/002.png " alt="ivysaur ">
                </article>
                <p class="font-bold text-black "> Nº0002</p>
                <p class="font-bold text-black text-2xl "> Ivysaur </p>
                <spam class=" text-black bg-green-400 rounded p-1 pl-10 pr-10 m-1"> Grass </spam>
                <spam class=" text-white bg-purple-500 rounded p-1 pl-10 pr-10 m-1"> Poison </spam>
            </article>
            <article class="bg-white ">
                <article class="bg-gray-300 p-15 rounded border-l-r-4  text-white ">
                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/003.png " alt="venusaur ">
                </article>
                <p class="font-bold text-black "> Nº0003</p>
                <p class="font-bold text-black text-2xl "> Venusaur </p>
                <spam class=" text-black bg-green-400 rounded p-1 pl-10 pr-10 m-1 "> Grass </spam>
                <spam class=" text-white bg-purple-500 rounded p-1 pl-10 pr-10 m-1 "> Poison </spam>
            </article>
            <article class="bg-white ">
                <article class="bg-gray-300 p-15 rounded border-l-r-4  text-white ">
                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png " alt="charmander ">
                </article>
                <p class="font-bold text-black "> Nº0004</p>
                <p class="font-bold text-black text-2xl "> Charmander </p>
                <spam class=" text-white bg-red-500 rounded p-1 pl-10 pr-10 m-1 "> Fire </spam>
            </article>
            <article class="bg-white ">
                <article class="bg-gray-300 p-15 rounded border-l-r-4  text-white ">
                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/005.png " alt="charmeleon ">
                </article>
                <p class="font-bold text-black "> Nº0005</p>
                <p class="font-bold text-black text-2xl "> Charmeleon </p>
                <spam class=" text-white bg-red-500 rounded p-1 pl-10 pr-10 m-1"> Fire </spam>
            </article>
            <article class="bg-white ">
                <article class="bg-gray-300 p-15 rounded border-l-r-4  text-white ">
                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/006.png " alt="charizard ">
                </article>
                <p class="font-bold text-black "> Nº0006</p>
                <p class="font-bold text-black text-2xl "> Charizard </p>
                <spam class="text-white bg-red-500 rounded p-1 pl-10 pr-10 m-1 "> Fire </spam>
                <spam class=" text-black bg-gray-300 rounded p-1 pl-10 pr-10 m-1 "> Flying </spam>
            </article>
            <article class="bg-white ">
                <article class="bg-gray-300 p-15 rounded border-l-r-4  text-white ">
                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png " alt="squirtle ">
                </article>
                <p class="font-bold text-black "> Nº0007</p>
                <p class="font-bold text-black text-2xl "> Squirtle </p>
                <spam class="text-white bg-blue-500 rounded p-1 pl-10 pr-10 m-1 "> Water </spam>
            </article>
            <article class="bg-white ">
                <article class="bg-gray-300 p-15 rounded border-l-r-4  text-white ">
                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/008.png " alt="wartortle ">
                </article>
                <p class="font-bold text-black "> Nº0008</p>
                <p class="font-bold text-black text-2xl "> Wartortle </p>
                <spam class="text-white bg-blue-500 rounded p-1 pl-10 pr-10 m-1 "> Water </spam>
            </article>
            <article class="bg-white ">
                <article class="bg-gray-300 p-15 rounded border-l-r-4  text-white ">
                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/009.png " alt="blastoise ">
                </article>
                <p class="font-bold text-black "> Nº0009</p>
                <p class="font-bold text-black text-2xl "> Blastoise </p>
                <spam class="text-white bg-blue-500 rounded p-1 pl-10 pr-10 m-1 "> Water </spam>
            </article>
            <article class="bg-white ">
                <article class="bg-gray-300 p-15 rounded border-l-r-4  text-white ">
                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/010.png " alt="Carterpie ">
                </article>
                <p class="font-bold text-gray-700 "> Nº0010</p>
                <p class="font-bold text-black text-2xl "> Carterpie </p>
                <spam class="text-white bg-green-700 rounded p-1 pl-10 pr-10 m-1 "> Bug </spam>
            </article>
            <article class="bg-white ">
                <article class="bg-gray-300 p-15 rounded border-l-r-4  text-white ">
                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/011.png " alt="metapod ">
                </article>
                <p class="font-bold text-gray-700 "> Nº0011</p>
                <p class="font-bold text-black text-2xl "> Metapod </p>
                <spam class="text-white bg-green-700 rounded p-1 pl-10 pr-10 m-1 "> Bug </spam>

            </article>
            <article class="bg-white ">
                <article class="bg-gray-300 p-15 rounded border-l-r-4  text-white ">
                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/012.png " alt="butterfree ">
                </article>
                <p class="font-bold text-gray-700 "> Nº0012</p>
                <p class="font-bold text-black text-2xl "> Butterfree </p>
                <spam class="text-white bg-green-700 rounded p-1 pl-10 pr-10 m-1 "> Bug </spam>
                <spam class="text-black bg-gray-300 rounded p-1 pl-10 pr-10 m-1 "> Flying </spam>

            </article>
            <article class="bg-white ">
                <article class="bg-gray-300 p-15 rounded border-l-r-4  text-white ">
                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/013.png " alt="weedle ">
                </article>
                <p class="font-bold text-gray-700 "> Nº0013</p>
                <p class="font-bold text-black text-2xl "> Weedle </p>
                <spam class="text-white bg-green-700 rounded p-1 pl-10 pr-10 m-1 "> Bug </spam>
                <spam class="text-white bg-purple-500 rounded p-1 pl-10 pr-10 m-1 "> Poison </spam>
            </article>
            <article class="bg-white ">
                <article class="bg-gray-300 p-15 rounded border-l-r-4 text-white ">
                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/014.png " alt="kakuna ">
                </article>
                <p class="font-bold text-gray-700 "> Nº0014</p>
                <p class="font-bold text-black text-2xl "> Kakuna </p>
                <spam class="text-white bg-green-700 rounded p-1 pl-10 pr-10 m-1 "> Bug </spam>
                <spam class="text-white bg-purple-500 rounded p-1 pl-10 pr-10 m-1 "> Poison </spam>
            </article>
            <article class="bg-white ">
                <article class="bg-gray-300 p-15 rounded border-l-r-4  text-white ">
                    <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/015.png " alt="beedrill ">
                </article>
                <p class="font-bold text-gray-700 "> Nº0015</p>
                <p class="font-bold text-black text-2xl "> Beedrill </p>
                <spam class="text-white bg-green-700 rounded p-1 pl-10 pr-10 m-1 "> Bug </spam>
                <spam class="text-white bg-purple-500 rounded p-1 pl-10 pr-10 m-1 "> Poison </spam>
            </article>
        </section>
        <button class="bg-blue-500 justify-center text-white rounded-[6px] p-3 m-8 cursor-pointer">Carregar mais Pokemon</button>
    </main>
</body>

</html>