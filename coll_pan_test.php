<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
<title>hlaSNPs</title>

</head>

	<div id="result-container">
    	<div class="collapsible">
        	<h3 class="heading">rs12345</h3>
            <div class="contents">
            	<table class="blueTable" width="75%" align="center">
                	<tr>
                    	<th>Test1</th>
                        <th>Test2</th>
                    </tr>
                    <tr>
                    	<td>Test1</td>
                        <td>Test2</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script>
    	$(document).ready(function() {
            $(".collapsible .contents").hide();
			$(".collapsible .heading").click(function() {
                $(this).next().toggle();
            });
        });
    </script>
    
</html>