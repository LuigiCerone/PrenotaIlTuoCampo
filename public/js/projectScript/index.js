$(function () {

    var sportsData = null;
    var selectedRegion = null, selectedSport = null;

    $.datepicker.regional['it'] = {
        closeText: 'Chiudi', // set a close button text
        currentText: 'Oggi', // set today text
        monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'], // set month names
        monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'], // set short month names
        dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'], // set days names
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'], // set short day names
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gio', 'Ve', 'Sa'], // set more short days names
        dateFormat: 'dd/mm/yy' // set format date
    };

    $("#datepicker").datepicker($.datepicker.regional['it']);
    $("#datepicker").datepicker();

    $('#timepicker').timepicker({
        minTime: '9:00am',
        maxTime: '11:00pm',
        disableTextInput: true,
        timeFormat: 'G:i',
        step: 60
    });

    // Sports data fetcher.
    $.ajax({
        type: "get",
        url: "resources/src/getSports.php",
        success: function (data) {
            // console.log(data);
            sportsData = data;
        },
        error: function (data) {
            console.log(data);
        }
    });

    // Sports typeahead.
    $('#sport').typeahead({
        minLength: 3,
        source: function (query, process) {
            objects = [];
            map = {};
            $.each(sportsData, function (i, object) {
                map[object.name] = object;
                objects.push(object.name);
            });
            process(objects);
        },
        matcher: function (item) {
            if (item.toLowerCase().indexOf(this.query.trim().toLowerCase()) != -1) {
                return true;
            }
        },
        updater: function (item) {
            selectedSport = map[item].id;
            console.log(selectedSport);
            return item;
        }
    });

    var italianRegions = [{"nome": "Agrigento", "sigla": "AG"}, {
        "nome": "Alessandria",
        "sigla": "AL"
    }, {"nome": "Ancona", "sigla": "AN"}, {"nome": "Aosta", "sigla": "AO"}, {
        "nome": "Arezzo",
        "sigla": "AR"
    }, {"nome": "Ascoli Piceno", "sigla": "AP"}, {"nome": "Asti", "sigla": "AT"}, {
        "nome": "Avellino",
        "sigla": "AV"
    }, {"nome": "Bari", "sigla": "BA"}, {"nome": "Barletta-Andria-Trani", "sigla": "BT"}, {
        "nome": "Belluno",
        "sigla": "BL"
    }, {"nome": "Benevento", "sigla": "BN"}, {"nome": "Bergamo", "sigla": "BG"}, {
        "nome": "Biella",
        "sigla": "BI"
    }, {"nome": "Bologna", "sigla": "BO"}, {"nome": "Bolzano", "sigla": "BZ"}, {
        "nome": "Brescia",
        "sigla": "BS"
    }, {"nome": "Brindisi", "sigla": "BR"}, {"nome": "Cagliari", "sigla": "CA"}, {
        "nome": "Caltanissetta",
        "sigla": "CL"
    }, {"nome": "Campobasso", "sigla": "CB"}, {"nome": "Carbonia-Iglesias", "sigla": "CI"}, {
        "nome": "Caserta",
        "sigla": "CE"
    }, {"nome": "Catania", "sigla": "CT"}, {"nome": "Catanzaro", "sigla": "CZ"}, {
        "nome": "Chieti",
        "sigla": "CH"
    }, {"nome": "Como", "sigla": "CO"}, {"nome": "Cosenza", "sigla": "CS"}, {
        "nome": "Cremona",
        "sigla": "CR"
    }, {"nome": "Crotone", "sigla": "KR"}, {"nome": "Cuneo", "sigla": "CN"}, {
        "nome": "Enna",
        "sigla": "EN"
    }, {"nome": "Fermo", "sigla": "FM"}, {"nome": "Ferrara", "sigla": "FE"}, {
        "nome": "Firenze",
        "sigla": "FI"
    }, {"nome": "Foggia", "sigla": "FG"}, {"nome": "Forlì-Cesena", "sigla": "FC"}, {
        "nome": "Frosinone",
        "sigla": "FR"
    }, {"nome": "Genova", "sigla": "GE"}, {"nome": "Gorizia", "sigla": "GO"}, {
        "nome": "Grosseto",
        "sigla": "GR"
    }, {"nome": "Imperia", "sigla": "IM"}, {"nome": "Isernia", "sigla": "IS"}, {
        "nome": "La Spezia",
        "sigla": "SP"
    }, {"nome": "L'Aquila", "sigla": "AQ"}, {"nome": "Latina", "sigla": "LT"}, {
        "nome": "Lecce",
        "sigla": "LE"
    }, {"nome": "Lecco", "sigla": "LC"}, {"nome": "Livorno", "sigla": "LI"}, {
        "nome": "Lodi",
        "sigla": "LO"
    }, {"nome": "Lucca", "sigla": "LU"}, {"nome": "Macerata", "sigla": "MC"}, {
        "nome": "Mantova",
        "sigla": "MN"
    }, {"nome": "Massa-Carrara", "sigla": "MS"}, {"nome": "Matera", "sigla": "MT"}, {
        "nome": "Messina",
        "sigla": "ME"
    }, {"nome": "Milano", "sigla": "MI"}, {"nome": "Modena", "sigla": "MO"}, {
        "nome": "Monza e della Brianza",
        "sigla": "MB"
    }, {"nome": "Napoli", "sigla": "NA"}, {"nome": "Novara", "sigla": "NO"}, {
        "nome": "Nuoro",
        "sigla": "NU"
    }, {"nome": "Olbia-Tempio", "sigla": "OT"}, {"nome": "Oristano", "sigla": "OR"}, {
        "nome": "Padova",
        "sigla": "PD"
    }, {"nome": "Palermo", "sigla": "PA"}, {"nome": "Parma", "sigla": "PR"}, {
        "nome": "Pavia",
        "sigla": "PV"
    }, {"nome": "Perugia", "sigla": "PG"}, {"nome": "Pesaro e Urbino", "sigla": "PU"}, {
        "nome": "Pescara",
        "sigla": "PE"
    }, {"nome": "Piacenza", "sigla": "PC"}, {"nome": "Pisa", "sigla": "PI"}, {
        "nome": "Pistoia",
        "sigla": "PT"
    }, {"nome": "Pordenone", "sigla": "PN"}, {"nome": "Potenza", "sigla": "PZ"}, {
        "nome": "Prato",
        "sigla": "PO"
    }, {"nome": "Ragusa", "sigla": "RG"}, {"nome": "Ravenna", "sigla": "RA"}, {
        "nome": "Reggio Calabria",
        "sigla": "RC"
    }, {"nome": "Reggio Emilia", "sigla": "RE"}, {"nome": "Rieti", "sigla": "RI"}, {
        "nome": "Rimini",
        "sigla": "RN"
    }, {"nome": "Roma", "sigla": "RM"}, {"nome": "Rovigo", "sigla": "RO"}, {
        "nome": "Salerno",
        "sigla": "SA"
    }, {"nome": "Medio Campidano", "sigla": "VS"}, {"nome": "Sassari", "sigla": "SS"}, {
        "nome": "Savona",
        "sigla": "SV"
    }, {"nome": "Siena", "sigla": "SI"}, {"nome": "Siracusa", "sigla": "SR"}, {
        "nome": "Sondrio",
        "sigla": "SO"
    }, {"nome": "Taranto", "sigla": "TA"}, {"nome": "Teramo", "sigla": "TE"}, {
        "nome": "Terni",
        "sigla": "TR"
    }, {"nome": "Torino", "sigla": "TO"}, {"nome": "Ogliastra", "sigla": "OG"}, {
        "nome": "Trapani",
        "sigla": "TP"
    }, {"nome": "Trento", "sigla": "TN"}, {"nome": "Treviso", "sigla": "TV"}, {
        "nome": "Trieste",
        "sigla": "TS"
    }, {"nome": "Udine", "sigla": "UD"}, {"nome": "Varese", "sigla": "VA"}, {
        "nome": "Venezia",
        "sigla": "VE"
    }, {"nome": "Verbano-Cusio-Ossola", "sigla": "VB"}, {"nome": "Vercelli", "sigla": "VC"}, {
        "nome": "Verona",
        "sigla": "VR"
    }, {"nome": "Vibo Valentia", "sigla": "VV"}, {"nome": "Vicenza", "sigla": "VI"}, {
        "nome": "Viterbo",
        "sigla": "VT"
    }];

    $('#region').typeahead({
        minLength: 3,
        source: function (query, process) {
            objects = [];
            map = {};
            $.each(italianRegions, function (i, object) {
                map[object.nome] = object;
                objects.push(object.nome);
            });
            process(objects);
        },
        matcher: function (item) {
            if (item.toLowerCase().indexOf(this.query.trim().toLowerCase()) != -1) {
                return true;
            }
        },
        updater: function (item) {
            selectedRegion = map[item].sigla;
            console.log(selectedRegion);
            return item;
        }
    });
});