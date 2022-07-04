<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Formularios.css">
    <title>Ingresar Pokemon</title>
    <link rel="icon" href="Imágenes/icon.png">
</head>
<body>
<main>
    <form action="AccionRegistrarPokemon.php" method="POST" enctype="multipart/form-data">
        <input class="input" type="text" placeholder="Nombre Pokemon" name="pkmn" required><br>
        <input class="input" type="text" placeholder="Numero en la pokedex" name="numero" required><br>
        <select name="tipo">
            <option value="">Seleccione un tipo</option>
            <option value="Fuego">Fuego</option>
            <option value="Planta">Planta</option>
            <option value="Agua">Agua</option>
            <option value="Electrico">Electrico</option>
            <option value="Roca">Roca</option>
            <option value="Tierra">Tierra</option>
            <option value="Volador">Volador</option>
            <option value="Bicho">Bicho</option>
            <option value="Psiquico">Psiquico</option>
            <option value="Hielo">Hielo</option>
            <option value="Lucha">Lucha</option>
            <option value="Veneno">Veneno</option>
            <option value="Normal">Normal</option>
            <option value="Dragón">Dragón</option>
            <option value="Fantasma">Fantasma</option>
            <option value="Acero">Acero</option>
            <option value="Siniestro">Siniestro</option>
            <option value="Hada">Hada</option>
        </select><br>
        <input type="text" name="descripcion" class="input"><br>
        <input name="foto" type="file" name="attachment" accept=".jpg, .png, .jpeg"><br>
        <input type="submit" value="Registrar Pokémon"  id="submit">
    </form>
   </main>
</body>
</html>