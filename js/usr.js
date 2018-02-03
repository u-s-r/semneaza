if ('undefined' === typeof window.USR) {
  window.USR = {};
}

(function (USR) {
  'use strict';

  USR.data = {};

  USR.data.targetSemnaturi = 200000;
  USR.data.semnaturiStranse = 350781;
  USR.data.intervalSemnaturi = [0, 400000];

  USR.data.semnaturi = {
    'DIASPORA': 100,
    'AB': 3160,
    'AR': 7397,
    'AG': 4681,
    'BC': 5259,
    'BH': 4312,
    'BN': 1498,
    'BT': 682,
    'BR': 2702,
    'BV': 17253,
    'BZ': 2539,
    'CL': 288,
    'CS': 725,
    'CJ': 26178,
    'CT': 8403,
    'CV': 135,
    'DB': 3213,
    'DJ': 3871,
    'GL': 5020,
    'GR': 1489,
    'GJ': 3877,
    'HR': 149,
    'HD': 2123,
    'IL': 240,
    'IS': 10862,
    'IF': 4847,
    'MM': 5450,
    'MH': 3213,
    'MS': 1309,
    'NT': 2973,
    'OT': 1168,
    'PH': 11473,
    'SM': 1396,
    'SJ': 731,
    'SB': 8013,
    'SV': 6864,
    'TR': 1050,
    'TM': 14779,
    'TL': 390,
    'VS': 2043,
    'VL': 1591,
    'VN': 810,
    'B': 159095
  };

  USR.data.contacte = {
    'AB': [{'locatie': 'Alba Iulia', 'contacte': ['Emil Comşa 0724078129']}]
    // etc..
  };

  USR.data.min = 0;
  USR.data.max = 159095;
})(USR);
