if ('undefined' === typeof window.USR) {
  window.USR = {};
}

(function (USR) {
  'use strict';

  USR.data = {};

  USR.data.semnaturiStranse = 20659;
  USR.data.targetSemnaturi = 200000;

  USR.data.semnaturi = {
    'AB': 250,
    'AR': 550,
    'AG': 1218,
    'BC': 403,
    'BH': 510,
    'BN': 583,
    'BT': 0,
    'BV': 871,
    'BR': 300,
    'BZ': 304,
    'CL': 200,
    'CS': 200,
    'CJ': 667,
    'CT': 462,
    'CV': 0,
    'DB': 320,
    'DJ': 430,
    'GL': 446,
    'GR': 320,
    'GJ': 800,
    'HR': 0,
    'HD': 790,
    'IS': 0,
    'IL': 0,
    'IF': 622,
    'MM': 827,
    'MH': 515,
    'MS': 0,
    'NT': 200,
    'OT': 404,
    'PH': 800,
    'SJ': 0,
    'SM': 66,
    'SB': 800,
    'SV': 711,
    'TR': 45,
    'TM': 1750,
    'TL': 0,
    'VL': 600,
    'VS': 0,
    'VN': 200,
    'B': 3495
  };

  USR.data.contact = '0726701994';

  USR.data.contacte = {
    'AB': [{'locatie': 'Alba Iulia', 'persoane': [['Emil Comşa', '0724078129']]}],
    'AR': [{'locatie': 'Arad', 'persoane': [['Vlad Cherchezan', '0728280286'], ['Botoș Vlad', '0745339339']]}],
    'AG': [{'locatie': 'Pitești', 'persoane': [['Cosmin Mihăescu', '0723256244'], ['Ion Mircescu', '0729426682']]}],
    'BC': [{'locatie': 'Bacău', 'persoane': [['Liviu Rusu', '0744123914'], ['Mihai Gârba', '0744498055']]}],
    'BH': [{'locatie': 'Oradea', 'persoane': [['Alexandru Flora', '0723582129'], ['Silviu Dehelean', '0744225391']]}],
    'BN': [{'locatie': 'Bistrița', 'persoane': [['Lorand Toth', '0744579499']]}],
    'BT': [],
    'BV': [
      {'locatie': 'Brașov', 'persoane': [['Cornel Sculean', '0741171780']]},
      {'locatie': 'Făgăraș', 'persoane': [['Alexandru Ţarczali', '0765138353']]}
    ],
    'BR': [{'locatie': 'Brăila', 'persoane': [['Radu-Octavian Englezu', '0746834419']]}],
    'BZ': [{'locatie': 'Buzău', 'persoane': [['Valeriu Mocanu', '0733517127']]}],
    'CL': [{'locatie': 'Călărași', 'persoane': [['Verman Daniela', '0766678626']]}],
    'CS': [{'locatie': 'Caraș-Severin', 'persoane': [['Ionuț Voinea', '0771550615'], ['Felix Velimirovici', '0744998973']]}],
    'CJ': [{'locatie': 'Cluj-Napoca', 'persoane': [['Radu Boloveschi', '0723324617'], ['Ovidiu Nistor', '0757988180']]}],
    'CT': [{'locatie': 'Constanţa', 'persoane': [['Răzvan Andrei', '0770475808']]}],
    'CV': [],
    'DB': [],
    'DJ': [{'locatie': 'Craiova', 'persoane': [['Adrian Prisnel', '0723250885'], ['Cosmin Stăicuţ', '0740279090']]}],
    'GL': [{'locatie': 'Galați', 'persoane': [['Radu Oprea', '0723342410']]}],
    'GR': [{'locatie': 'Giurgiu', 'persoane': [['Raluca Duţu', '0734969744']]}],
    'GJ': [
      {'locatie': 'Târgu Jiu', 'persoane': [['Marius Stroie', '0741156512'], ['Nicolae Chilea', '0744696328']]},
      {'locatie': 'Motru', 'persoane': [['George Vintilescu', '0722275005']]},
      {'locatie': 'Bumbești-Jiu', 'persoane': [['Ioan Bucălae', '0761951986']]}
    ],
    'HR': [],
    'HD': [{'locatie': 'Hunedoara', 'persoane': [['Camelia Măhălean', '0733317010']]}],
    'IS': [{'locatie': 'Iași', 'persoane': [['Mihai Lupu', '0742056155']]}],
    'IL': [],
    'IF': [
      {'locatie': 'Bragadiru', 'persoane': [['Marius Călinescu', '0723762921']]},
      {'locatie': 'Chiajna', 'persoane': [['George Dircă', '0722305017']]},
      {'locatie': 'Corbeanca', 'persoane': [['Jan Cardon', '0722437937']]},
      {'locatie': 'Pantelimon', 'persoane': [['Lucian Zelincă', '0747070970']]},
      {'locatie': 'Popești-Leordeni', 'persoane': [['Ciprian Necula', '0749123413']]}
    ],
    'MM': [{'locatie': 'Baia Mare', 'persoane': [['Dan Ivan', '0745398368'], ['Iulian Mariş', '0722984841'], ['Simona Petruț', '0744643348']]}],
    'MH': [{'locatie': 'Drobeta-Turnu Severin', 'persoane': [['Ştefania Ramona Homeag', '0753192547'], ['Ilie Scarlat', '0754674783']]}],
    'MS': [],
    'NT': [
      {'locatie': 'Piatra Neamț', 'persoane': [['Ioan Ploşcaru', '0747437300']]},
      {'locatie': 'Roman', 'persoane': [['Iulian Bulai', '0721389605']]}
    ],
    'OT': [{'locatie': 'Slatina', 'persoane': [['Silviu Anton', '0765558019']]}],
    'PH': [{'locatie': 'Ploiești', 'persoane': [['Dan Rădulescu', '0743323448']]}],
    'SJ': [{'locatie': 'Zalău', 'persoane': [['Cosmin-Vasile Ardelean', '0747696764']]}],
    'SM': [{'locatie': 'Satu Mare', 'persoane': [['Anca Sabou', '0745350977']]}],
    'SB': [{'locatie': 'Sibiu', 'persoane': [['Dan Adrian Ghiță', '0752177272'], ['Raluca Amariei', '0721554693']]}],
    'SV': [{'locatie': 'Suceava', 'persoane': [['Ovidiu Ghiuţă', '0742128883']]}],
    'TR': [
      {'locatie': 'Alexandria', 'persoane': [['Constanţa Duminică', '0769410020'], ['Nicuşor Lina', '0768334501']]},
      {'locatie': 'Turnu Măgurele', 'persoane': [['Sergiu Iordan', '0723211595']]}
    ],
    'TM': [{'locatie': 'Timișoara', 'persoane': [['Luminița Dolângă', '0754097620'], ['Sorin Şipoş', '0722469508']]}],
    'TL': [],
    'VL': [{'locatie': 'Râmnicu Vâlcea', 'persoane': [['Lucian Constantin Mîrzoiu', '0771441467'], ['Eduard Rădulescu', '0752310000']]}],
    'VS': [],
    'VN': [{'locatie': 'Focșani', 'persoane': [['Cristian Ionascu', '0741157931']]}],
    'B': [
      {'locatie': 'Sectorul 1', 'persoane': [['Cristian Bulfon', '0724534435']]},
      {'locatie': 'Sectorul 2', 'persoane': [['Alin Arsu', '0727046890'], ['Cristina Neagu', '0722286142']]},
      {'locatie': 'Sectorul 3', 'persoane': [['Alexandru Vesa', '0756312238']]},
      {'locatie': 'Sectorul 4', 'persoane': [['Cristian Matache', '0785810915'], ['Sorin Ceacar', '0766751943']]},
      {'locatie': 'Sectorul 5', 'persoane': [['Dragos Geamană', '0722609530']]},
      {'locatie': 'Sectorul 6', 'persoane': [['Mihai Botez', '0763829093']]}
    ]
  };

  USR.data.diaspora = {
    'semnaturi': {
      'DIASPORA': 0
    },
    'contact': 'diaspora@usr.ro',
    'info': 'Citiţi cu atenţie <em>instrucţiunile pentru diaspora</em> de completare a formularului!',
    'contacte': [
      {'locatie': 'Republica Moldova', 'persoane': [['Gheorghe Viță', '37369926687']]},
      {'locatie': 'Italia', 'persoane': [['Cerasella Ponta (Roma)', '+393280947327'], ['Corina Cristina Velniciuc (Roma)', '+393285521723']]},
      {'locatie': 'Spania', 'persoane': [['Iulian Lorincz', '34605363124'], ['Anca Boldeanu (Barcelona)', '+34689070453', 'ancaboldeanu@yahoo.com']]},
      {'locatie': 'Marea Britanie', 'persoane': [['Radu Mircea', '+447860162346'], ['Carmel Ciurdas', '+447538776519']]},
      {'locatie': 'Germania', 'persoane': [['Eliza Marin', '+4915201363721'], ['Crina Petec Călin', '+4901724005476']]},
      {'locatie': 'Franța', 'persoane': [['Emanuel Stoica (Paris)', '+33782746399'], ['Andrei Corbu (Paris)', '+33675335422'], ['Iulian Rotaru (Lyon)', '+33612922890']]},
      {'locatie': 'S.U.A', 'persoane': [['Camil Golub (NY)', '+13472396714'], ['Mircea Alex (NY)', '+19149604179'], ['Matei Ioniță (Philadephia)', '+12154597574'], ['Ioana Slăniceanu (LA)', '+13109277195']]},
      {'locatie': 'Canada', 'persoane': [['Doina Simion (Montreal)', '+15148569114']]},
      {'locatie': 'Belgia', 'persoane': [['Mardale Cintzia-Angelina', '+33652675438'], ['Luana Bidașcă', '+32498785021']]},
      {'locatie': 'Austria', 'persoane': [['Leonard Stoica', '+436764938714']]},
      {'locatie': 'Elveția', 'persoane': [['Annamaria Kozma (Zürich)', '+41762174816'], ['Codrin Alexandru (Zürich)', '+41795304999', 'grcodal@gmail.com'], ['Dan Enache (Geneva)', '+33670177504']]},
      {'locatie': 'Luxemburg', 'persoane': [['Adrian Bardan', '+352661223183', 'bardan.adrian@yahoo.com']]},
      {'locatie': 'Olanda', 'persoane': [['Virgil Petre', '+31628217749']]},
    ]
  };

  USR.data.min = 0;
  USR.data.max = 3495;
})(USR);
