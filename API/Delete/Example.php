<html>

<head>
    <title>PHP Test</title>
</head>

<body>
    <?php echo '<p>Hello World</p>'; ?>

    <form>
        <p>Ricerca <input type="text" id="valore" name="name" /></p>
        <p><input type="submit" id="button"/></p>
    </form>

    <div id="tabella">
    </div>

    <script>
        
        //on document ready
        document.addEventListener("DOMContentLoaded", function(event) {
            console.log("DOM fully loaded and parsed");
            var button = document.getElementById("button");
            button.addEventListener("click", onSearchClick);

        });

        function onSearchClick(e) {
            e.preventDefault(); // per non far ricaricare la pagina
            var contenuto = document.getElementById("valore").value;
            
            console.log(e);

            let xhr = new XMLHttpRequest();
            xhr.open('GET', '/www/API/Delete/apiShowName.php?t=' + contenuto);
            xhr.send();
            
            xhr.onload = function() {
                if (xhr.status != 200) { // analyze HTTP status of the response
                    alert(`Error ${xhr.status}: ${xhr.statusText}`); // e.g. 404: Not Found
                } else { // show the result
                    console.log(`Done, got ${xhr.response.length} bytes`); // response is the server
                    //var res = JSON.parse(xhr.response);
                    //res = xhr.response;
                    //console.log(res);
                    var t = document.getElementById("tabella");
                    t.innerHTML = xhr.response;
                    
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
            console.log("User ID to delete:", userId);

            let deleteXhr = new XMLHttpRequest();
            //deleteXhr.open('POST', '/www/APIDelete.php?id=' + userId);
            deleteXhr.open('POST', '/www/API/Delete/apiDeleteName.php');
            //deleteXhr.send();

            //deleteXhr.open('POST', 'APIDelete.php');
            //deleteXhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            //deleteXhr.send('id=' + encodeURIComponent(userId));
            deleteXhr.send('id=' + userId);
            console.log("Request payload senza encodeURIComponent:", 'id=' + (userId));
            console.log("Request payload:", 'id=' + encodeURIComponent(userId));


            // Gestisci la risposta del server
            deleteXhr.onload = function () {
                if (deleteXhr.status != 200) {
                    alert(`Error ${deleteXhr.status}: ${deleteXhr.statusText}`);
                } else {
                    // Rimuovi la divisione dell'utente dal DOM                   
                    e.target.parentNode.remove(userId);
                }
            };
        }
         


    </script>


</body>

</html>
