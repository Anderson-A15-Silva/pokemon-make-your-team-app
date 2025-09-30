<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex | Criar Conta</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-600 flex items-center justify-center min-h-screen bg-[url('img/greatBallBackground.jpg')] bg-cover bg-center">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-2xl flex overflow-hidden">

        <div class="w-1/3 bg-red-600 flex flex-col items-center justify-center p-6">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/items/poke-ball.png" alt="Pokébola" class="w-20 h-20 mb-4 animate-bounce">
            <h2 class="text-white font-bold text-xl text-center">Treinador</h2>
        </div>

        <div class="w-2/3 p-8 flex flex-col justify-center">
            <h1 class="text-2xl font-bold text-gray-800 mb-6">Criar Conta Pokémon</h1>
            <form class="space-y-4" method="post" action="index.html">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="username" name="n-username" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 p-2" placeholder="Ash Ketchum" required>
                </div>

                <div>
                    <label for="user-phone-number" class="block text-sm font-medium text-gray-700">Phone number</label>
                    <input type="number" id="user-phone-number" name="n_phone-number" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 p-2" placeholder="Ash Ketchum" required>
                </div>

                <div>
                    <label for="user-email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="user-email" name="n_email" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 p-2" placeholder="ash@pallet.com" required>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                    <input type="password" id="user-password" name="n_password" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500 p-2" placeholder="••••••••" required>
                </div>

                <button type="submit" class="w-full bg-red-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-red-700 transition">
          Entrar
        </button>
                <a href="login.html" class=" flex justify-center text-black text-center">Já tem uma conta? Faça login</a>
                <a href="index.html" class=" flex justify-center text-black text-center">voltar</a>
            </form>
        </div>
    </div>
</body>

</html>