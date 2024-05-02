# train


#Stringa per far partire il docker#

docker run --name myXampp -p 41061:22 -p 41062:80 -d -v /workspaces/train:/www tomsik68/xampp:8


-----------------------------------------------------------------------------------------------------------


#Nome db#

progetto


-----------------------------------------------------------------------------------------------------------


#Funzionalita#

-login utente

-regitrazione giocatore

stabilire la preparazione di un giocatore:

-creare una tabella suddivisa in giorni della settimana e fasce orarie

-in base ai dati inseriti dall'utente, creare un piano di lavoro

-registrare le percentuali/statistiche degli esercizi

-aggiungere tabella e percentuali allo storico del sito

-(creare una classifica ricercando le statistiche per ogni singolo esercizio tra tutti i giocatori)

-si possono ricercare i propri dati accedendo con le credenziali


-----------------------------------------------------------------------------------------------------------


#ER#

![new](https://github.com/lorenzotasca/train/assets/101709418/ca815d43-10f6-441b-99d4-9a938b8b0385)



-----------------------------------------------------------------------------------------------------------


#Relazionale#  []: PRIMARY KEY    {}: FOREIGN KEY

Giocatore([ID_giocatore], cognome, nome, data_nascita, tipo, ruolo, standing_reach, altezza_senza_scarpe, apertura_alare, username, password)

Scheda([ID_scheda], dedizione)

Allenamento([ID_allenamento], descrizione)

Statistica([ID_statistica], libero, pt_2, pt_3, scatto, salto_vert_da_fermo, salto_vert_max)

comprende([ID], {ID_allenamento}, {ID_scheda})

riceve([ID], {ID_giocatore}, {ID_scheda}, data_crezione)

registra([ID], {ID_giocatore}, {ID_statistica}, data)


-----------------------------------------------------------------------------------------------------------



#Mokup#

#Part 1

![image](https://github.com/lorenzotasca/train/assets/101709418/b92dcd5e-84c7-4e57-bfa5-b5340c17b57d)


#Part 2

![part2](https://github.com/lorenzotasca/train/assets/101709418/6dfe4ab4-3cc1-4554-bde4-23de4121ed49)

#Part 3

![part3](https://github.com/lorenzotasca/train/assets/101709418/9576d654-50fd-4c6c-817a-c6f6c56fab65)

#Part 4

![part4](https://github.com/lorenzotasca/train/assets/101709418/10fc2ecd-540d-42f0-b4e8-4b5b0493a591)

