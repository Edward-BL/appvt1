<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Descuentos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
        }
        .calculator {
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #0073e6;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #0056b3;
        }
        p {
            font-size: 20px;
            margin-top: 10px;
        }
        span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h1>Calculadora de Descuentos</h1>
        <label for="precioOriginal">Precio Original:</label>
        <input type="number" id="precioOriginal" step="0.01"><br><br>
        <label for="porcentajeDescuento">Porcentaje de Descuento:</label>
        <input type="number" id="porcentajeDescuento" step="0.01"><br><br>
        <button onclick="calcularDescuento()">Calcular Descuento</button><br><br>
        <p>El precio final después del descuento es: <span id="precioFinal"></span></p>
    </div>

    <script>
        function calcularDescuento() {
            const precioOriginal = parseFloat(document.getElementById("precioOriginal").value);
            const porcentajeDescuento = parseFloat(document.getElementById("porcentajeDescuento").value);

            if (!isNaN(precioOriginal) && !isNaN(porcentajeDescuento)) {
                const descuento = (precioOriginal * porcentajeDescuento) / 100;
                const precioFinal = precioOriginal - descuento;
                document.getElementById("precioFinal").textContent = "$" + precioFinal.toFixed(2);
            } else {
                alert("Por favor, ingresa valores numéricos válidos.");
            }
        }
    </script>
</body>
</html>
