<html>

<head>
    <title>PHP Test</title>
</head>

<body>
    <?php echo '<p>Hello World</p>'; ?>

    <form>
        <p>Ricerca <input type="text" id="valore" name="name" /></p>
        <p><input type="submit" id="botton"/></p>
    </form>

    <div id="tabella">
    </div>

    <script>
        
        //on document ready
        document.addEventListener("DOMContentLoaded", function(event) {
            console.log("DOM fully loaded and parsed");
            var botton = document.getElementById("botton");
            botton.addEventListener("click", onSearchClick);

        });

        function onSearchClick(e) {
            e.preventDefault(); // per non far ricaricare la pagina
            var contenuto = document.getElementById("valore").value;
            
            console.log(e);

            let xhr = new XMLHttpRequest();
            xhr.open('GET', '/www/API.php?t=' + contenuto);
            xhr.send();
            
            xhr.onload = function() {
                if (xhr.status != 200) { // analyze HTTP status of the response
                    alert(`Error ${xhr.status}: ${xhr.statusText}`); // e.g. 404: Not Found
                } else { // show the result
                    console.log(`Done, got ${xhr.response.length} bytes`); // response is the server
                    //var res = JSON.parse(xhr.response);
                    res = xhr.response;
                    console.log(res);
                    var t = document.getElementById("tabella");
                    t.innerHTML = res;
                    
                    // Aggiungi listener di click ai pulsanti di eliminazione
                    var deleteButtons = document.querySelectorAll('.delete-button');
                    deleteButtons.forEach(function (button) {
                        button.addEventListener('click', onDeleteClick);
                    });
                }
            };


            return false; // Evita ulteriori azioni di default del form
        }

        function onDeleteClick(e) {
            e.preventDefault();

            // Ottieni l'ID dell'utente associato al pulsante di eliminazione
            var userId = e.target.dataset.id;

            let deleteXhr = new XMLHttpRequest();
            deleteXhr.open('POST', '/www/APIDelete.php?id=' + userId);
            deleteXhr.send();

            // Gestisci la risposta del server
            deleteXhr.onload = function () {
                if (deleteXhr.status != 200) {
                    alert(`Error ${deleteXhr.status}: ${deleteXhr.statusText}`);
                } else {
                    // Rimuovi la divisione dell'utente dal DOM
                    e.target.parentNode.remove();
                }
            };
        }
         


    </script>


</body>

</html>
