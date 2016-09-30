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

  USR.data.contacte = {
    'AB': [{'locatie': 'Alba Iulia', 'persoane': [{'nume': 'Emil Comşa', 'telefon': '0724078129'}]}],
    'AR': [{'locatie': 'Arad', 'persoane': [{'nume': 'Vlad Cherchezan', 'telefon': '0728280286'}, {'nume': 'Botoș Vlad', 'telefon': '0745339339'}]}],
    'AG': [{'locatie': 'Pitești', 'persoane': [{'nume': 'Cosmin Mihăescu', 'telefon': '0723256244'}, {'nume': 'Ion Mircescu', 'telefon': '0729426682'}]}],
    'BC': [{'locatie': 'Bacău', 'persoane': [{'nume': 'Liviu Rusu', 'telefon': '0744123914'}, {'nume': 'Mihai Gârba', 'telefon': '0744498055'}]}],
    'BH': [{'locatie': 'Oradea', 'persoane': [{'nume': 'Alexandru Flora', 'telefon': '0723582129'}, {'nume': 'Silviu Dehelean', 'telefon': '0744225391'}]}],
    'BN': [{'locatie': 'Bistrița', 'persoane': [{'nume': 'Lorand Toth', 'telefon': '0744579499'}]}],
    'BT': [],
    'BV': [
      {'locatie': 'Brașov', 'persoane': [{'nume': 'Cornel Sculean', 'telefon': '0741171780'}]},
      {'locatie': 'Făgăraș', 'persoane': [{'nume': 'Alexandru Ţarczali', 'telefon': '0765138353'}]}
    ],
    'BR': [{'locatie': 'Brăila', 'persoane': [{'nume': 'Radu-Octavian Englezu', 'telefon': '0746834419'}]}],
    'BZ': [{'locatie': 'Buzău', 'persoane': [{'nume': 'Valeriu Mocanu', 'telefon': '0733517127'}]}],
    'CL': [{'locatie': 'Călărași', 'persoane': [{'nume': 'Verman Daniela', 'telefon': '0766678626'}]}],
    'CS': [{'locatie': 'Caraș-Severin', 'persoane': [{'nume': 'Ionuț Voinea', 'telefon': '0771550615'}, {'nume': 'Felix Velimirovici', 'telefon': '0744998973'}]}],
    'CJ': [{'locatie': 'Cluj-Napoca', 'persoane': [{'nume': 'Radu Boloveschi', 'telefon': '0723324617'}, {'nume': 'Ovidiu Nistor', 'telefon': '0757988180'}]}],
    'CT': [{'locatie': 'Constanţa', 'persoane': [{'nume': 'Răzvan Andrei', 'telefon': '0770475808'}]}],
    'CV': [],
    'DB': [],
    'DJ': [{'locatie': 'Craiova', 'persoane': [{'nume': 'Adrian Prisnel', 'telefon': '0723250885'}, {'nume': 'Cosmin Stăicuţ', 'telefon': '0740279090'}]}],
    'GL': [{'locatie': 'Galați', 'persoane': [{'nume': 'Radu Oprea', 'telefon': '0723342410'}]}],
    'GR': [{'locatie': 'Giurgiu', 'persoane': [{'nume': 'Raluca Duţu', 'telefon': '0734969744'}]}],
    'GJ': [
      {'locatie': 'Târgu Jiu', 'persoane': [{'nume': 'Marius Stroie', 'telefon': '0741156512'}, {'nume': 'Nicolae Chilea', 'telefon': '0744696328'}]},
      {'locatie': 'Motru', 'persoane': [{'nume': 'George Vintilescu', 'telefon': '0722275005'}]},
      {'locatie': 'Bumbești-Jiu', 'persoane': [{'nume': 'Ioan Bucălae', 'telefon': '0761951986'}]}
    ],
    'HR': [],
    'HD': [{'locatie': 'Hunedoara', 'persoane': [{'nume': 'Camelia Măhălean', 'telefon': '0733317010'}]}],
    'IS': [{'locatie': 'Iași', 'persoane': [{'nume': 'Mihai Lupu', 'telefon': '0742056155'}]}],
    'IL': [],
    'IF': [
      {'locatie': 'Bragadiru', 'persoane': [{'nume': 'Marius Călinescu', 'telefon': '0723762921'}]},
      {'locatie': 'Chiajna', 'persoane': [{'nume': 'George Dircă', 'telefon': '0722305017'}]},
      {'locatie': 'Corbeanca', 'persoane': [{'nume': 'Jan Cardon', 'telefon': '0722437937'}]},
      {'locatie': 'Pantelimon', 'persoane': [{'nume': 'Lucian Zelincă', 'telefon': '0747070970'}]},
      {'locatie': 'Popești-Leordeni', 'persoane': [{'nume': 'Ciprian Necula', 'telefon': '0749123413'}]}
    ],
    'MM': [{'locatie': 'Baia Mare', 'persoane': [{'nume': 'Dan Ivan', 'telefon': '0745398368'}, {'nume': 'Iulian Mariş', 'telefon': '0722984841'}, {'nume': 'Simona Petruț', 'telefon': '0744643348'}]}],
    'MH': [{'locatie': 'Drobeta-Turnu Severin', 'persoane': [{'nume': 'Ştefania Ramona Homeag', 'telefon': '0753192547'}, {'nume': 'Ilie Scarlat', 'telefon': '0754674783'}]}],
    'MS': [],
    'NT': [
      {'locatie': 'Piatra Neamț', 'persoane': [{'nume': 'Ioan Ploşcaru', 'telefon': '0747437300'}]},
      {'locatie': 'Roman', 'persoane': [{'nume': 'Iulian Bulai', 'telefon': '0721389605'}]}
    ],
    'OT': [{'locatie': 'Slatina', 'persoane': [{'nume': 'Cristofor Decebal', 'telefon': '0771602904'}]}],
    'PH': [{'locatie': 'Ploiești', 'persoane': [{'nume': 'Dan Rădulescu', 'telefon': '0743323448'}]}],
    'SJ': [{'locatie': 'Zalău', 'persoane': [{'nume': 'Stelian Ene', 'telefon': '0728052499'}]}],
    'SM': [{'locatie': 'Satu Mare', 'persoane': [{'nume': 'Anca Sabou', 'telefon': '0745350977'}]}],
    'SB': [{'locatie': 'Sibiu', 'persoane': [{'nume': 'Dan Adrian Ghiță', 'telefon': '0752177272'}, {'nume': 'Raluca Amariei', 'telefon': '0721554693'}]}],
    'SV': [{'locatie': 'Suceava', 'persoane': [{'nume': 'Ovidiu Ghiuţă', 'telefon': '0742128883'}]}],
    'TR': [
      {'locatie': 'Alexandria', 'persoane': [{'nume': 'Constanţa Duminică', 'telefon': '0769410020'}, {'nume': 'Nicuşor Lina', 'telefon': '0768334501'}]},
      {'locatie': 'Turnu Măgurele', 'persoane': [{'nume': 'Sergiu Iordan', 'telefon': '0723211595'}]}
    ],
    'TM': [{'locatie': 'Timișoara', 'persoane': [{'nume': 'Luminița Dolângă', 'telefon': '0754097620'}, {'nume': 'Sorin Şipoş', 'telefon': '0722469508'}]}],
    'TL': [],
    'VL': [{'locatie': 'Râmnicu Vâlcea', 'persoane': [{'nume': 'Lucian Constantin Mîrzoiu', 'telefon': '0771441467'}, {'nume': 'Eduard Rădulescu', 'telefon': '0752310000'}]}],
    'VS': [],
    'VN': [{'locatie': 'Focșani', 'persoane': [{'nume': 'Cristian Ionascu', 'telefon': '0741157931'}]}],
    'B': [
      {'locatie': 'Sectorul 1', 'persoane': [{'nume': 'Cristian Bulfon', 'telefon': '0724534435'}]},
      {'locatie': 'Sectorul 2', 'persoane': [{'nume': 'Alin Arsu', 'telefon': '0727046890'}, {'nume': 'Cristina Neagu', 'telefon': '0722286142'}]},
      {'locatie': 'Sectorul 3', 'persoane': [{'nume': 'Alexandru Vesa', 'telefon': '0756312238'}]},
      {'locatie': 'Sectorul 4', 'persoane': [{'nume': 'Cristian Matache', 'telefon': '0785810915'}, {'nume': 'Sorin Ceacar', 'telefon': '0766751943'}]},
      {'locatie': 'Sectorul 5', 'persoane': [{'nume': 'Dragos Geamană', 'telefon': '0722609530'}]},
      {'locatie': 'Sectorul 6', 'persoane': [{'nume': 'Mihai Botez', 'telefon': '0763829093'}]}
    ]
  };

  USR.data.diaspora = {
    'semnaturi': {
      'DIASPORA': 0
    }
  };

  USR.data.min = 0;
  USR.data.max = 3495;
})(USR);
