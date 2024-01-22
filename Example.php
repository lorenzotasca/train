<html>

<head>
    <title>PHP Test</title>
</head>

<body>
    <?php echo '<p>Hello World</p>'; ?>

    <form>
        <p>Ricerca <input type="text" id="valore" name="name" /></p>
        <p><input type="submit" id="bottone"/></p>
    </form>

    <div id="tabella">
    </div>

    <script>
        
        //on document ready
        document.addEventListener("DOMContentLoaded", function(event) {
            console.log("DOM fully loaded and parsed");
            var bottone = document.getElementById("bottone");
            bottone.addEventListener("click", sulClick);

        });

        function sulClick(e) {
            e.preventDefault();
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
                    
                }
            };


            return false;
        }

        /*
        //rivedi da qui a riga 77
        document.addEventListener("DOMContentLoaded", function(event) {
            console.log("DOM fully loaded and parsed");
            var delete = document.getElementById("delete");
            bottone.addEventListener("click", PermanentlyDelete);

        });

        function PermanentlyDelete(e){
            e.preventDefault();

            let xhr = new XMLHttpRequest();

            xhr.open('POST', 'Example.php', true);



            xhr.send();


        }
        */

        function PermanentlyDelete(id) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", 'APIDelete.php', true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    console.log(this.responseText);
                }
            }
            xhr.send("id=" + id);
        }

        document.querySelectorAll('.delete-button').forEach(function(button) {
            button.addEventListener('click', function() {
                var id = this.getAttribute('data-id');
                PermanentlyDelete(id);
            });
        });


    </script>


</body>

</html>