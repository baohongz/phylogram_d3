<!doctype html>

<html lang="en">

    <head>

        <!-- CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" />
        <link href="https://cdn.rawgit.com/leongersen/noUiSlider/master/distribute/nouislider.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">

        <!-- JS -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.rawgit.com/mbostock/5577023/raw/5ee09dca6afdbef864de89d4d6caa3296f926f00/colorbrewer.min.js	"></script>
        <script type="text/javascript" src="https://cdn.rawgit.com/jasondavies/newick.js/master/src/newick.js"></script>
        <script src="https://d3js.org/d3.v3.min.js"></script>
        <script type="text/javascript" src="js/lib/tooltip.js"></script>
        <script type="text/javascript" src="https://cdn.rawgit.com/leongersen/noUiSlider/master/distribute/nouislider.min.js"></script>
        <script type="text/javascript" src="js/phylogram_d3.js"></script>
        <script type="text/javascript" src="js/utils.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <script> 
        var treeOptions = {
            'mapping_file': 'dat/mapping.txt',
           // 'treeType': 'rectangular',
            'treeType': 'radial',
            'hideRuler': false,
            'skipBranchLengthScaling': false,
            'skipLabels': false,
        }
    </script>
    <body onload="init('dat/tree.tre', '#phylogram', treeOptions);">

        <!-- div for tree -->
        <div id='phylogram'></div>

    </body>

