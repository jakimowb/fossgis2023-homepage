<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>Inhalte aus OSM-Daten mit ogr2ogr für QGIS bereitstellen – FOSSGIS 2021</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/dienstag.php#session_RVNKMA">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>Inhalte aus OSM-Daten mit ogr2ogr für QGIS bereitstellen</h2>
        <section>
            <p>
                <span class='abstract-sessiontype'>Workshop</span>
                                von <span class='abstract-speakers'>Claas Leiner</span></p>
                <p class='abstract-is-workshop'>Bitte melden Sie sich im <a href="https://pretix.eu/fossgis/2021/">Ticketshop</a> für diesen Workshop an, wenn Sie daran teilnehmen möchten.</p>                                                <p class='abstract-is-workshop'>Sie erhalten in der Woche vor der Konferenz eine E-Mail mit detaillierten Informationen zum Workshop sowie die Möglichkeit in einem Termin Ihre Technik auszuprobieren.</p>            <p><span class='abstract-time-heading'>Zeit: </span>Dienstag 08. Juni 16:00 Uhr
                <br><span class='abstract-room-heading'>Ort: </span>Workshop 2
                <br><span class='abstract-room-heading'>Dauer: </span>90 Minuten
            </p>

                        
            <p>Im Workshop lernen die TN,  mit ogr2ogr und der integrierten SQL-Abfragemöglichkeit gezielt Inhalte aus den OSM-Rohdaten für die Visualisierung und Verarbeitung im QGIS verfügbar zu machen. Dazu gehört auch die Bearbeitung der Konfigurationsdatei osmconf.ini.</p>
<p>In den Rohdaten von OSM finden sich eine Vielzahl von Informationen, die sich für die weitere Verarbeitung im QGIS nutzen lassen. Um die gewünschten Inhalte präzise aus den PBF-Rohdaten ins QGIS zu bekommen, ist das Kommandozeilenwerkzeug ogr2ogr ein effektives Werkzeug.
Folgende Schritte werden im Workshop am praktischen geübt:
- OSM-Rohdaten mit ogr2ogr nach SpatiaLite / Geopackage / Postgis  importieren
- Die gesuchten OSM-Inhalte mit Hilfe der SQL-Option direkt im ogr2ogr-Befehl auswählen.
- Spalten- und Layer-Bezeichnungen beim Import bestimmen.
-  Die Konfigurationsdatei osmconf.ini bearbeiten um OSM-Tags präzise  in Layerspalten abzubilden 
    und die Erstellung von Polygonen zu für bestimmte Inhalte zu bestimmen.</p>
<p>Beispielhaft wird dies an den Daten zur Stromversorgung (Umspannwerke, Leitungen, Kraftwerke etc.) bearbeitet.</p>
        <div class='abstract-bio'>
            <h3 class='abstract-bio-name'>Claas Leiner</h3>
                        <p>Claas Leiner arbeitet miit seinem Büro GKG freiberuflich in Kassel und bietet Schulungen, Dienstleistungen und Support rund um die freien Geoinformationssysteme QGIS, GRASS, SpatiaLite, Postgis sowie GDAL/OGR an. Desweiteren bearbeitet er Aufträge zu Geodatenaufbereitung, -analysen und thematische Kartografie. Besonders verbunden ist er mit QGIS - als Mitglied des QGIS-Anwendervereins QGIS-DE, als Mitorganisator der QGIS-Anwendertreffen 2011 - 2018 sowie als Bronze-Sponsor des Projektes.</p>
        </div>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>