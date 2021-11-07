## LIBURUTEGIAREN WEB SISTEMA

Taldekideak: **Martin Amezola** eta **Andoni Olabarria**.

_DOCKER BIDEZ HEDATZEKO INSTRUKZIOAK:_

    1. Proiektuaren karpeta barruan kokatu terminalaren bidez (docker-lamp barruan).
    2. Behin barruan, sudo docker build -t="web" . komandoa exekutatu eta zure pasahitza sartu hau baimentzeko.
    3. Behin aurreko komando amaituta, sudo docker-compose up komandoa exekutatu.
    4. PHPMyAdmin-en (http://localhost:8890), datu basea inportatu lan karpetako database.sql fitxategia hautatuz.
    5. Aurreko lau pausoak egindakoan, http://localhost:81 helbidean sartuz gero web orria agertuko da.
    6. Web orriarekin amaitutakoan, beste terminal bat zabaldu eta sudo docker-compose down komando exekutatu.
