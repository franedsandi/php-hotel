Hotel
===
**Descrizione**
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
===
**Bonus:**
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.
Buon lavoro!
===
Step-By-Step:
1. add the array to php zone
2. apply a foreach to the array (hotels as hotel)
3. create a table with the info from the array (still using foreach)
4. apply a ternary funtion to if its true = Yes, else No
4. apply bootstrap an design
5. if no filter is specified, show all hotels
6. bonus: filter if the hotel have parking or not with a form
7. bonus: filter by vote (1-5) and make both filters work together 
8. bonus: sort the list of hotels by distance to center
