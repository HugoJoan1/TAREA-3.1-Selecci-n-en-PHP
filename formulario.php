<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "/TAREA-3.1-Selecci-n-en-PHP/resultados.php" method="POST">
        <label for="destino">Destinos:</label>
        <select name="destino[]" id="destino" multiple>
        <option value="Cancun">Cancun</option>
        <option value="Puerto Vallarta">Puerto Vallarta</option>
        <option value="Acapulco">Acapulco</option>
        <option value="Los Cabos">Los Cabos</option>
        <option value="Mazatlan">Mazatlan</option>
        <option value="Huatulco">Huatulco</option>
        <option value="Puerto Escondido">Puerto Escondido</option>
        </select><br><br>
        
        <h2>Actividades</h2>
        <label for="opcion-1">
            <input type="checkbox" value="Buceo" id="opcion=1" name="Actividad[]">
            Buceo
        </label><br>
        <label for="opcion-2">
            <input type="checkbox" value="Paseo_en_lancha" id="opcion=2" name="Actividad[]">
            Paseo en lancha
        </label><br>
        <label for="opcion-3">
            <input type="checkbox" value="Visita_a_zonas_arqueológicas" id="opcion=3" name="Actividad[]">
            Visita a zonas arqueológicas
        </label><br>
        <label for="opcion-4">
            <input type="checkbox" value="Senderismo" id="opcion=4" name="Actividad[]">
            Senderismo
        </label><br>
        <label for="opcion-5">
            <input type="checkbox" value="Pesca_deportiva" id="opcion=5" name="Actividad[]">
            Pesca deportiva
            </label><br>
        <label for="opcion-6">
        <input type="checkbox" value="Recorrido_gastronomico" id="opcion=6" name="Actividad[]">
            Recorrido gastronomico
        </label><br>
        <label for="opcion-7">
        <input type="checkbox" value="Visita_a_museos" id="opcion=7" name="Actividad[]">
            Visita a museos
        </label><br>
        </label><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>