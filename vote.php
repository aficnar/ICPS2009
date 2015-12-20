<?php
session_start();
if ($_SESSION['check']!='ok' || $_SESSION['brojcek']=='') {header("location:registration.php");}
$kod=0;
if (isset($_POST['salji'])) {
if ($_POST['radiobutton']=="" || $_POST['radiobutton2']=="") {$kod=1;}
}
?>

<html>
<head>
<title>ICPS2009 Best Student Lecture &amp; Poster</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="stil.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" border="0">
  <tr> 
    <td width="100"><img src="images/logo_small.gif"></td>
    <td><img src="images/best%20student%20lecture%20and%20poster.gif" width="600" height="30"></td>
  </tr>
</table>
  <?php
if (!isset($_POST['salji']) || $kod==1) {
?>
<?php
if ($kod==1) {echo "<br><br> <img src='images/usklicnik_manji.jpg' width='20' height='20' border='0' align='left' /> <span class='crvenoerror'>Please vote both for the best lecture and poster.</span><br>";}
?>
<p>&nbsp; 
<form name="vote" method="post" action="vote.php">
  <p class="linkCopy"><font size="+2">Your vote for the Best Student Lecture</font></p>
  <br><span class="linkCopy">Lectures from Tuesday, August 11th </span> 
  <table width="1000" border="0" cellpadding="5" cellspacing="5" class="organizatoriCopy">
    <tr> 
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton" value="l1">
        </div></td>
      <td width="288"><strong>Optoelectronic devices with photonic crystals</strong><br> 
        <em>Radu Florin Stancu</em></td>
      <td width="36"> <div align="right"> 
          <input type="radio" name="radiobutton" value="l2">
        </div></td>
      <td width="288" class="organizatoriCopy"><strong>Terrestrial Gamma-ray Flashes, 
        TGF</strong><br> <em>Raghild Schr&oslash;der Hansen</em></td>
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton" value="l3">
        </div></td>
      <td width="288"><strong>Multiple Partonic Interaction at LHC</strong><br> 
        <em>Lucia Garbini</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l4">
        </div></td>
      <td><strong>Electron spin qubits: Optical state preparation and decoherence 
        in semiconductor quantum dots</strong><br> <em>Clemens Matthiesen</em></td>
      <td> <div align="right"> 
          <input type="radio" name="radiobutton" value="l5">
        </div></td>
      <td><strong>The analysis of processes in the early universe responsible 
        for the properties of the CMBR</strong><br> <em>Paulina Karczmarek</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l6">
        </div></td>
      <td><strong>Monitoring trigger rates of the ATLAS detector at CERN</strong><br> 
        <em>Silvia Arghir</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l7">
        </div></td>
      <td><strong>Band Tails and Supersymmetry</strong><br> <em>Casper Drukier</em></td>
      <td> <div align="right"> 
          <input type="radio" name="radiobutton" value="l8">
        </div></td>
      <td><strong>Line Locking in Quasars: Escaping the Grips of Black Holes</strong><br> 
        <em>Rebecca Bowler</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l9">
        </div></td>
      <td><strong>Charge-parity violation at the Large Hadron Collider</strong><br> 
        <em>Hamish Gordon</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l10">
        </div></td>
      <td><strong>Synthesis of UNCD Films by Microwave CVD with Short Overview 
        of UNCD Films&#8217; History and Application</strong><br> <em>Milan Vrucinic</em></td>
      <td> <div align="right"> 
          <input type="radio" name="radiobutton" value="l11">
        </div></td>
      <td><strong>Implementing a full-robotic astronomical observatory</strong><br> 
        <em>Nicola Fulvio Calabria</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l12">
        </div></td>
      <td><strong>Network Splitting</strong><br> <em>Brendan O'Dowd</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l13">
        </div></td>
      <td><strong>A search of the Spin Bose-glass phase in the Quantum Hall States 
        of the Double Quantum Wells</strong><br> <em>Y. Kravets, M. Marchewka, 
        D. Ploch, G. Tomaka and E.M. Sheregii</em></td>
      <td> <div align="right"> 
          <input type="radio" name="radiobutton" value="l14">
        </div></td>
      <td><strong>Supersymmetric Dark Matter as the Source of the WMAP Haze</strong><br> 
        <em>Gabriel Caceres</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l15">
        </div></td>
      <td><strong>Physics and Simulations at the Forward Region of the International 
        Linear Collider</strong><br> <em>Madalina Stanescu-Bellu</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l16">
        </div></td>
      <td><strong>Hybrid photovoltaic structures based on CdTe nanowire arrays 
        and organic dyes thin films</strong><br> <em>Camelia Florica,T. Mitran, 
        C. Besleaga, L. Ion, I. Enculescu, V. A. Antohe, A. Radu, S. Antohe</em></td>
      <td> <div align="right"> 
          <input type="radio" name="radiobutton" value="l17">
        </div></td>
      <td><strong>Studies of the solar phenomena with the ARGO-YBJ experiment</strong><br> 
        <em>Mario Dapr&agrave;</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l18">
        </div></td>
      <td><strong>Trackers for high energy physics experiments</strong><br> <em>Luigi 
        Calligaris </em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l19">
        </div></td>
      <td><strong>Enhance your precious: the art and science of diamond crystal 
        modification</strong><br> <em>Teresa Kubacka</em></td>
      <td> <div align="right"> 
          <input type="radio" name="radiobutton" value="l20">
        </div></td>
      <td><strong>Superfluidity phenomenon in Neutron Stars</strong><br> <em>Luc 
        Di Gallo</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l21">
        </div></td>
      <td><strong>Physics of Heavy Ion Collisions: Zone of Reactions</strong><br> 
        <em>A. Muskeyev, D. Anchishkin, S. Yezhov</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l22">
        </div></td>
      <td><strong>What Grows Inside Alumina Honeycombs?</strong><br> <em>Mariana 
        P. Proenca</em></td>
      <td> <div align="right"> 
          <input type="radio" name="radiobutton" value="l23">
        </div></td>
      <td><strong>Mass loss on the AGB from gas and dust diagnostics</strong><br> 
        <em>Robin Lombaert</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l24">
        </div></td>
      <td><strong>Computing for High Energy Physics</strong><br> <em>Rafal Grzymkowski</em></td>
    </tr>
  </table>
  <span class="linkCopy"><br>
  <br>
  Lectures from Wednesday, August 12th </span> 
  <table width="1000" border="0" cellpadding="5" cellspacing="5" class="organizatoriCopy">
    <tr> 
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton" value="l25">
        </div></td>
      <td width="288"><strong>Charge ordering and phase separations in the atomic 
        limit of the extended Hubbard model</strong><br> <em>Konrad Kapcia</em></td>
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton" value="l26">
        </div></td>
      <td width="288"><strong>Cold Flows in the Marenostrum Simulation</strong><br> 
        <em>Jonathan Freundlich</em></td>
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton" value="l27">
        </div></td>
      <td width="288"><strong>Measurement of the cross section of Au197(n,2n)Au196 
        reaction</strong><br> <em>E.Mara, R.Vlastou, M.Kokkoris, C.Papadopoulos, 
        A.Tsigganis </em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l28">
        </div></td>
      <td><strong>Examining the hardness and module of elasticity of chalcogenide 
        glass using the Fisherscope HM2000 S</strong><br> <em>Aleksandar Antic</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l29">
        </div></td>
      <td><strong>Spiral arms in the accretion disc of the intermediate polar 
        DQ Her</strong><br> <em>Steven Bloemen</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l30">
        </div></td>
      <td><strong>Simulations for the optimization of the MVD detector of the 
        PANDA experiment</strong><br> <em>Simone Bianco</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l31">
        </div></td>
      <td><strong>IBIC analysis of SiC Schottky diodes</strong><br> <em>Piero 
        Gamarra</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l32">
        </div></td>
      <td><strong>The Wolf-Rayet Population of NGC1313 and NGC300</strong><br> 
        <em>Nadia This</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l33">
        </div></td>
      <td><strong>Fuelling of fusion reactors</strong><br> <em>V. Csajbok, E. 
        Belonohy, K. Gal</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l34">
        </div></td>
      <td><strong>What happens when you bind hydrogen to graphene?</strong><br> 
        <em>Marek Rataj</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l35">
        </div></td>
      <td><strong>Cataclysmic Variables: What are they and why do we need them?</strong><br> 
        <em>Ilse Decoster</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l36">
        </div></td>
      <td><strong>The role of chaos in the sawtooth crash of tokamak plasmas</strong><br> 
        <em>Gergely Papp</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l37">
        </div></td>
      <td><strong>The New Class of Composites: Ferroelectric Liquid Crystal Nanocolloids</strong><br> 
        <em>Shelestiuk, S.M., Reshetnyak, V.Yu., Sluckin, T.J.</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l38">
        </div></td>
      <td><strong>Extraterrestial Life</strong><br> <em>Nehir Banaz and Tugba 
        Buyukbese</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l39">
        </div></td>
      <td><strong>Poloidal velocity measurement in toroidal plasmas via beam emission 
        spectroscopy</strong><br> <em>Laszlo Bardoczi</em></td>
    </tr>
  </table>
<span class="linkCopy"><br>
  <br>
  Lectures from Thursday, August 13th </span> 
  <table width="1000" border="0" cellpadding="5" cellspacing="5" class="organizatoriCopy">
    <tr> 
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton" value="l40">
        </div></td>
      <td width="288"><strong>Equilibrium shapes of spontaneously bending surfaces</strong><br> 
        <em>Jamil Hetzel</em></td>
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton" value="l41">
        </div></td>
      <td width="288"><strong>Simulation of impact craters</strong><br> <em>Luci 
        Karbonini and Marin Vojkovic</em></td>
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton" value="l42">
        </div></td>
      <td width="288"><strong>Production and study of spinor condensates of 87Rb 
        released from a magnetic trap</strong><br>
        <em>M. Piotrowski, R. Gartman, J. Szczepkowski, L. Tracewski, M. Witkowski, 
        M. Zawada, W. Gawlik</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l43">
        </div></td>
      <td><strong>Laser-induced Femtosecond Spin-Dynamics in Metallic Multilayers</strong><br> 
        <em>Adrian Glaubitz and Alexey Melnikov</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l44">
        </div></td>
      <td><strong>Using Circular Polarization Ratio Measurements to Determine 
        a New Means of Dating Lunar Craters</strong><br> <em>Adam Woodruff, Don 
        Campbell, Kassie Wells, Bruce Campbell, Lynn Carter</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l45">
        </div></td>
      <td><strong>Two-photon photoassociation of cold atoms in femtosecond laser 
        field</strong><br> <em>Michal Tomza</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l46">
        </div></td>
      <td><strong>Optical properties of polymer films containing CdS quantum dots</strong><br> 
        <em>Andrii Kovalchuk</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l47">
        </div></td>
      <td><strong>The Physics of the Solar Wind</strong><br> <em>Ciaran Kenny</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l48">
        </div></td>
      <td><strong>Nanosecond-Laser Ablation - A Theoretical and Experimental Approach</strong><br> 
        <em>Teofil Minea</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l49">
        </div></td>
      <td><strong>Introduction to ab initio calculations in the context of condensed 
        matter physics</strong><br> <em>Lucas V&aacute;zquez Besteiro</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l50">
        </div></td>
      <td><strong>Binary Orbital Motion of Electrically Charged Spheres in Weightlessness</strong><br> 
        <em>J. T. Fuchs, B. M. Atkins, G. A. Franks, B. K. Hoffmeister, L. Li, 
        D. A. Meyer, C. W. Sliger, J. E. Thompson</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l51">
        </div></td>
      <td><strong>Heating of Nanoclusters by Intense Ultrashort Laser Pulses and 
        Laser Stimulated Bremsstrahlung</strong><br> <em>Burenkov I.A., Tikhonova 
        O.V.</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l52">
        </div></td>
      <td><strong>Quantum Hall Effect</strong><br> <em>Vivirschi Bogdan Nicolaie</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l53">
        </div></td>
      <td><strong>One Giant Leap For Mankind</strong><br> <em>William Davies</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l54">
        </div></td>
      <td><strong>Overview of force spectroscopy techniques</strong><br> <em>Stanko 
        Zecevic</em></td>
    </tr>
  </table>
<span class="linkCopy"><br>
  <br>
  Lectures from Friday, August 14th </span> 
  <table width="1000" border="0" cellpadding="5" cellspacing="5" class="organizatoriCopy">
    <tr> 
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton" value="l55">
        </div></td>
      <td width="288"><strong>Surfaces for click chemistry: Stability under UV 
        irradiation</strong><br> <em>Peter van Abswoude</em></td>
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton" value="l56">
        </div></td>
      <td width="288"><strong>LISA &amp; Quantum Squeezing, Future Gravitational 
        Wave Experiments</strong><br> <em>Matthew Reagor, Prof. Peter Bender, 
        Prof. Roman Schnabel</em></td>
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton" value="l57">
        </div></td>
      <td width="288"><strong>Plastic micro-lasers</strong><br> <em>I.Gozhyk, 
        N.Djellali, M.Lebental, J. Lautru, S. Lozenko and J. Zyss</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l58">
        </div></td>
      <td><strong>Quantum phase transition in photonic crystal microcavities</strong><br> 
        <em>Michael Knap</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l59">
        </div></td>
      <td><strong>Wave breaking observations using acoustic methods</strong><br> 
        <em>Agata Dragan</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l60">
        </div></td>
      <td><strong>Impact of electric field on single-bubble sonoluminescence</strong><br> 
        <em>Maciej Jasinski</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l61">
        </div></td>
      <td><strong>Organic Thin Film Transistors (O-TFTs)</strong><br> <em>Thomas 
        Obermueller, Marco Marchl, Simon Ausserlechner, Anja Haase, Egbert Zojer</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l62">
        </div></td>
      <td><strong>The North Atlantic Oscillation</strong><br> <em>Irena Balog</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l63">
        </div></td>
      <td><strong>Double Stripe Line</strong><br> <em>Bogdan Vasylkiv</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l64">
        </div></td>
      <td><strong>Fundamentals of Organic Semiconductors and Applications</strong><br> 
        <em>Alfred Neuhold</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l65">
        </div></td>
      <td><strong>Aurora Borealis &#8211; The Northern Nights Fever</strong><br> 
        <em>Anna Sokulska</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l66">
        </div></td>
      <td><strong>XPS X-Ray Photoelectron Spectroscopy</strong><br> <em>Alfio 
        Battiato and Veronica Giorgis</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l67">
        </div></td>
      <td><strong>Molecular Electronics: One Step Closer to Computers of Tomorrow</strong><br> 
        <em>E. G. Petrov, V. A. Leonov</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l68">
        </div></td>
      <td><strong>Seasonal variability of carbon fluxes in the subtropical North 
        Atlantic at 24.5&deg;N</strong><br> <em>Pavic, M.,Cunningham, S.A., Brown, 
        P., Scuhuster, U., Watson, A.J.</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l69">
        </div></td>
      <td><strong>X -ray phase contrast imaging with grating interferometer</strong><br> 
        <em>Venera Altapova</em></td>
    </tr>
  </table>
<span class="linkCopy"><br>
  <br>
  Lectures from Sunday, August 16th </span> 
  <table width="1000" border="0" cellpadding="5" cellspacing="5" class="organizatoriCopy">
    <tr> 
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton" value="l70">
        </div></td>
      <td width="288"><strong>Spring-block type models for capillarity-driven 
        self organization of nanotubes</strong><br> <em>Emoke-&Aacute;gnes Horv&aacute;t, 
        Ferenc J&aacute;rai-Szab&oacute;, Zolt&aacute;n N&eacute;da</em></td>
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton" value="l71">
        </div></td>
      <td width="288"><strong>Playing Tetris the right way: Pentominos and Dancing 
        Links</strong><br> <em>Ralf Gamillscheg, Peter Pippan</em></td>
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton" value="l72">
        </div></td>
      <td width="288"><strong>Less calculus, More geometry</strong><br> <em>Emre 
        Kolay</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l73">
        </div></td>
      <td><strong>Synthesis and characterization of hydroxyapatite nanotubes</strong><br> 
        <em>Jo&atilde;o Carlos Mesquita Coelho</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l74">
        </div></td>
      <td><strong>An Objective Method for Revealing Hierarchical Settlement Networks</strong><br> 
        <em>Gabriell M&aacute;t&eacute;, Zolt&aacute;n N&eacute;da, J&oacute;zsef 
        Benedek</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l75">
        </div></td>
      <td><strong>Strings, Extra Dimensions and Braneworlds &#8211; an Introduction</strong><br> 
        <em>Stephanie Range</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l76">
        </div></td>
      <td><strong>The comparison of MCG and PMM methods for ischemia disorders 
        detection</strong><br> <em>Valeriia Konieva</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l77">
        </div></td>
      <td><strong>Application of neural networks and fuzzy logic on processing 
        of physical measurements data</strong><br> <em>Damir Ribic</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l78">
        </div></td>
      <td><strong>The Casimir Effect and Supersymmetry</strong><br> <em>Matthias 
        Sars</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l79">
        </div></td>
      <td><strong>Neurophysics of Vision: Ambiguous images and binocular rivalry</strong><br> 
        <em>Jessica Stanley</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l80">
        </div></td>
      <td><strong>High Performance Scientific Computing On Graphics Processors</strong><br> 
        <em>Matija Pi&#353;korec</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l81">
        </div></td>
      <td><strong>Comparison several method for optical vortex point localization 
        in optical vortex lattice</strong><br> <em>Monika Leniec</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l82">
        </div></td>
      <td><strong>Amazing world of nanoparticles</strong><br> <em>Pawel Pedrak</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l83">
        </div></td>
      <td><strong>Quarter of the memristor</strong><br> <em>Magdalena Olbromska</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l84">
        </div></td>
      <td><strong>Young's double-slit experiment with entangled photons</strong><br> 
        <em>J. J. Renema, W.H. Peeters and M.P. van Exter</em></td>
    </tr>
  </table>
<span class="linkCopy"><br>
  <br>
  Lectures from Monday, August 17th </span> 
  <table width="1000" border="0" cellpadding="5" cellspacing="5" class="organizatoriCopy">
    <tr> 
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton" value="l85">
        </div></td>
      <td width="288"><strong>Simulation of Polymers</strong><br> <em>Konrad Schwenke</em></td>
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton" value="l86">
        </div></td>
      <td width="288"><strong>Hunting the paranormal - physics of the impossible</strong><br> 
        <em>Sebastian Szwarc</em></td>
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton" value="l87">
        </div></td>
      <td width="288"><strong>The influence of the electric field on the emission 
        properties of the Sc-Ba dispensed emitters</strong><br> <em>I.I. Bekh, 
        O.V. Verbytska, V.V. Il'chenko, A.E. Lushkin</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l88">
        </div></td>
      <td><strong>Ternary Polymer Melts: Insight from Mesoscale Modelling</strong><br> 
        <em>Zbysek Posel, Martin Lisal</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l89">
        </div></td>
      <td><strong>The Philosophy Of Space And Time</strong><br> <em>Yemliha Bilal 
        Kalyoncu</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l90">
        </div></td>
      <td><strong>Channeling electrons in 'Image States' above solid surfaces 
        to form links between qbit islands</strong><br> <em>Ravindranath 'Robin' 
        Gajria</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l91">
        </div></td>
      <td><strong>Playing tic-tac-toe with DNA - deoxyribozime-based logic gates 
        as a plug-and-play integrated system</strong><br> <em>Iwona Mucha-Kruczynska</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l92">
        </div></td>
      <td><strong>Life and the Second Law of Thermodynamics</strong><br> <em>Ivana 
        Stankovic</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l93">
        </div></td>
      <td><strong>Thermalisation and entropy in Heisenberg spin chains</strong><br> 
        <em>Lidia del Rio</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l94">
        </div></td>
      <td><strong>Acoustic resonators to monitor protein aggregation in crowded 
        environments</strong><br> <em>White D.A., Buell A.K., Knowles T.P.J., 
        Welland M.E., Dobson C.M.</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l95">
        </div></td>
      <td><strong>Physics in the kitchen</strong><br> <em>Barbara Olbromska</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l96">
        </div></td>
      <td><strong>Oddity of non-newtonian fluids</strong><br> <em>Magdalena Kus</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l97">
        </div></td>
      <td><strong>Raman spectroscopy for live cells studies</strong><br> <em>Alina 
        Zoladek</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l98">
        </div></td>
      <td><strong>Paper-planes: their flight and their physics</strong><br> <em>Ali 
        Farnudi</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton" value="l99">
        </div></td>
      <td><strong>Renewable Energy: modeling and control of micro hydroelectrical 
        plants</strong><br> <em>Issam Salhi, Said Doubabi</em></td>
    </tr>
  </table>

  <p><hr align="left" width="1000" size="2" noshade></p>
  <br>
  <br>
  <p class="linkCopy"><font size="+2">Your vote for the Best Student Poster</font></p>
  <span class="linkCopy"> <br>
  Posters from Poster Session 1</span> 
  <table width="1000" border="0" cellpadding="5" cellspacing="5" class="organizatoriCopy">
    <tr> 
      <td width="36" height="136"><div align="right"> 
          <input type="radio" name="radiobutton2" value="p1">
        </div></td>
      <td width="288"><strong>Bar Instability and Black holes</strong><br> <em>Valentina 
        De Romeri</em></td>
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton2" value="p2">
        </div></td>
      <td width="288"><strong>Swift satellite's data analysis about 3c 279 and 
        PKS 1510</strong><br> <em>Umberto Battino</em></td>
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton2" value="p3">
        </div></td>
      <td width="288"><strong>Long-term INTEGRAL observations of bright and persistent 
        neutron star Low-Mass X-ray Binaries</strong><br> <em>Petri Savolainen, 
        Diana Carina Hannikainen, Ada Paizis, Ruben Farinelli, Osmi Vilhu and 
        Erik Kuulkers</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p4">
        </div></td>
      <td><strong>Uncovering the pulsating photosphere of R Boo through nIR interferometry</strong><br> 
        <em>Michel Hillen</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p5">
        </div></td>
      <td><strong>The flux ratio of the [O III] \lambda\lambda 5007, 4959 &Aring; 
        lines in AGN - analysis of the sample with red asymmetry and with no asymmetry 
        of [O III] line profiles</strong><br>
        <em>Dajana Vranjes, Djordje Smiljic, Milan Gligoric, Nemanja Rakic, Dalibor 
        Obradovic and Jelena Kovacevic</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p6">
        </div></td>
      <td><strong>Milutin Milankovic - time traveler</strong><br>
        <em>Djordje Smiljic</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p7">
        </div></td>
      <td><strong>Hunting the paranormal - physics of the impossible</strong><br> 
        <em>Sebastian Szwarc</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p8">
        </div></td>
      <td><strong>On some unconventional ways to solve physical equations with 
        MathCAD</strong><br> <em>Constantin Dan Buioca and Livia-Maria Sorop</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p9">
        </div></td>
      <td><strong>Hydrogen Storage Capacity and Shape of the Classical Molecule 
        Trajectories</strong><br> <em>Milan Popovic, Milan Gligoric and Nemanja 
        Rakic</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p10">
        </div></td>
      <td><strong>Currents in the Mediterranean and Adriatic Sea</strong><br> 
        <em>Marija Mustac</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p11">
        </div></td>
      <td><strong>BR Limits on FCNC Top decays at ATLAS</strong><br> <em>Antonio 
        Onofre, Filipe Veloso</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p12">
        </div></td>
      <td><strong>Infrared Propagators in QCD</strong><br> <em>Petro Fedosenko</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p13">
        </div></td>
      <td><strong>Fixed Point Resolutions in Extension of Permutation Orbifolds</strong><br> 
        <em>Michele Maio</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p14">
        </div></td>
      <td><strong>Energy unfolding of the diffractively scattered proton transport 
        at the LHC for ALFA@ATLAS</strong><br> <em>Maciej Trzebinski</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p15">
        </div></td>
      <td><strong>A strange attractor</strong><br> <em>Bence B&eacute;ky and Yves 
        Coudene</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p16">
        </div></td>
      <td><strong>Measuring concentration of radon in the air</strong><br> <em>Jelena 
        Sobot and Dragana Malivuk</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p17">
        </div></td>
      <td><strong>Neutron induced background gamma activity in low-level Ge-spectroscopy 
        systems</strong><br> <em>Nikola Jovancevic</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p18">
        </div></td>
      <td><strong>The Effective Potential of Macroparticle in a Magnetized Collisionless 
        Dusty Plasma</strong><br> <em>Maksym Ryndia</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p19">
        </div></td>
      <td><strong>How to make your own Theremin?</strong><br> <em>Julia Wiktor, 
        Radek Radziejewski, Aleksandra Grzelak</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p20">
        </div></td>
      <td><strong>Ion beam analysis of corrosive compounds in superheaters from 
        biomass and waste combustion facility</strong><br> <em>M. Napari, J. Julin, 
        M. Laitinen, J. Maunuksela,T. Sajavaara, M. Aho, H.J. Whitlow</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p21">
        </div></td>
      <td><strong>Ultraintense lasers: science and applications</strong><br> <em>R. 
        Borrego Varillas, C. Mendez, I. Arias, L. Roso</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p22">
        </div></td>
      <td><strong>The efficiency of photovoltaic solar cells in specific meteorological 
        conditions</strong><br> <em>Davor Topalovic, Petar Janjic, Stefan Cagljevic</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p23">
        </div></td>
      <td><strong>Force of sounds &#8211; acoustic levitation</strong><br> <em>Bartlomiej 
        Tomala</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p24">
        </div></td>
      <td><strong>Coherent Control Demo model</strong><br> <em>G. Hemink, E. Dietrich</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p25">
        </div></td>
      <td><strong>Thermohaline Circulation: The Global Ocean Conveyor</strong><br> 
        <em>Milena Latinovic, Tatjana Radjenovic</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p26">
        </div></td>
      <td><strong>Condensation of water vapor in atmosphere on ionised atoms</strong><br>
        <em>Djordje Smiljic, Dajana Vranjes</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p27">
        </div></td>
      <td><strong>Using of electronic resources for hands-on work; Hands-On kit 
        (pressure)</strong><br> <em>Uliana Nyemchenko</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p28">
        </div></td>
      <td><strong>The role of the auditory system in a transforming of physical 
        parameters of sound into its sensual features</strong><br> <em>Julia Jakubowska</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p29">
        </div></td>
      <td><strong>Aerodynamics of a cycling team in a time trial</strong><br> 
        <em>A. &Iacute;&ntilde;iguez-de-la Torre and I. &Iacute;&ntilde;iguez-de-la 
        Torre</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p30">
        </div></td>
      <td> <strong>TLP Database Analysis</strong><br> <em>Carla Stratton</em></td>
    </tr>
  </table>
  <span class="linkCopy"><br>
  <br>
  Posters from Poster Session 2</span> 
  <table width="1000" border="0" cellpadding="5" cellspacing="5" class="organizatoriCopy">
    <tr> 
      <td width="36" height="21"><div align="right"> 
          <input type="radio" name="radiobutton2" value="p31">
        </div></td>
      <td width="288"><strong>Thin film deposition with short review of recent 
        developments and applications</strong><br> <em>Milan Vrucinic and Bojana 
        Kacar</em></td>
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton2" value="p32">
        </div></td>
      <td width="288"><strong>A Novel Bird-inspired Flapping-Wing Test Bench</strong><br> 
        <em>Min-Chi, Lai, Ciann-Dong, Yang, Teng-Yi, Chang</em></td>
      <td width="36"><div align="right"> 
          <input type="radio" name="radiobutton2" value="p33">
        </div></td>
      <td width="288"><strong>Hydrophobin: a protein out of the ordinary</strong><br> 
        <em>Elodie Aumaitre, Pietro Cicuta</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p34">
        </div></td>
      <td><strong>Studies of biodegradable plastics produced by quiescent E. coli</strong><br> 
        <em>N. M. Thomson, E. Sivaniah, D. K. Summers</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p35">
        </div></td>
      <td><strong>Cooperative Enzyme Kinetics</strong><br> <em>Teslenko V.I., 
        Kozlova O.V.</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p36">
        </div></td>
      <td><strong>High energy ball-milling of hydrogen titanate nanotubes</strong><br>
        <em>Milivoj Plodinec, Ivica Friscic, Damir Ivekovic, Andreja Gajovic</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p37">
        </div></td>
      <td><strong>An Introduction To Graphene &amp; Squarium And Some Novel Applications</strong><br> 
        <em>Thomas Standard</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p38">
        </div></td>
      <td><strong>Modelling charge-imbalanced NaNbO3/SrTiO3 superlattices: lattice 
        relaxation and metallicity</strong><br> <em>Riku Oja and Risto M. Nieminen</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p39">
        </div></td>
      <td><strong>Density Distribution of Matter in Systems of Finite Size</strong><br> 
        <em>Gudyma A., Vasilev O.</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p40">
        </div></td>
      <td><strong>Preparation and characterization of Au cluster deposited on 
        MgO/Ag (100)</strong><br> <em>Marco Caputo</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p41">
        </div></td>
      <td><strong>From bulk to films: Thin Films Prepared by RF magnetron Sputtering</strong><br> 
        <em>R. Frunza, F. Prihor and L. Mitoseriu</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p42">
        </div></td>
      <td><strong>Critical Points for Symmetric Synthetic Antiferromagnetic Structures</strong><br> 
        <em>Andrei-Valentin Plamada, Alexandru Stancu</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p43">
        </div></td>
      <td><strong>Towards a new approach to the magnetization of ferromagnetic 
        two-particle systems</strong><br> <em>Magdalena Jitca, Andrei-Valentin 
        Plamada, Alexandru Stancu</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p44">
        </div></td>
      <td><strong>Phonon States of Nano-Chrystaline Film Structures</strong><br> 
        <em>Igor Mandic</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p45">
        </div></td>
      <td><strong>The influence of chiral additives on phase transitions of cholesteric 
        liquid crystals</strong><br> <em>Vladica Nikolic, Ivan Budincevic, Kristina 
        Fodor</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p46">
        </div></td>
      <td><strong>Applications of Superconductivity</strong><br> <em>Stephanie 
        Walton</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p47">
        </div></td>
      <td><strong>Application of the radiochromic films for the purposes of high 
        energy X-ray dose measurements</strong><br> <em>V.Rebyakova, M.Lavrova, 
        T.Tatarinova</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p48">
        </div></td>
      <td><strong>Physical Aspects of Usage Fullerenes in Medicine</strong><br> 
        <em>A. A. Lipovtsev</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p49">
        </div></td>
      <td><strong>Vocal folds</strong><br> <em>Edit Karvak</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p50">
        </div></td>
      <td><strong>Detecting cerebral blood volume changes in sleep apnea with 
        near-infrared spectroscopy</strong><br> <em>Jaakko Virtanen</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p51">
        </div></td>
      <td><strong>Three-Dimension Quantum Dynamics In Diatomic Molecule</strong><br> 
        <em>Ciann-Dong Yang and Hung-Jen Weng</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p52">
        </div></td>
      <td><strong>The optical transmission of one-dimensional photonic crystals 
        containing double-negative materials</strong><br> <em>Andreea Cristina 
        Petcu, Liliana Preda</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p53">
        </div></td>
      <td><strong>Piercing an interface with a brush</strong><br> <em>Filippo 
        Chiodi, Benoit Roman and Jos&egrave; Bico</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p54">
        </div></td>
      <td><strong>Determination of the elastic properties of solid materials by 
        acoustical method</strong><br> <em>Stefania Brignolo, Simona Lago</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p55">
        </div></td>
      <td><strong>Measuring the Rate of Chemical Reaction Between Marble and Hydrochloric 
        Acid</strong><br> <em>Dragoljub Vrankovic, Nemanja Rakic</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p56">
        </div></td>
      <td><strong>Dancing with Physics</strong><br> <em>Gizem Sengor, Ibrahim 
        Semiz</em></td>
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p57">
        </div></td>
      <td><strong>Law of forces of Rudjer Boskovic</strong><br> <em>Antonija 
        Mijatovic</em></td>
    </tr>
    <tr> 
      <td><div align="right"> 
          <input type="radio" name="radiobutton2" value="p58">
        </div></td>
      <td><strong>Laser, where are you?</strong><br> <em>Krystian Hausmann</em></td>
      <td><div align="right"></div></td>
      <td>&nbsp;</td>
      <td><div align="right"></div></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <table width="1000" border="0">
  <tr>
    <td><div align="right">
          <input type="submit" name="salji" value="Vote" />
        </div></td>
  </tr>
</table>
</form>
<?php
} else {
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){die('Could not connect: ' . mysql_error() . '<br><br> Please contact the webmaster.');}
mysql_select_db("icps2009", $con);
$sql="INSERT INTO vote(broj,lecture,poster) VALUES ('$_SESSION[brojcek]','$_POST[radiobutton]','$_POST[radiobutton2]')";
if (!mysql_query($sql,$con)){die('Error: ' . mysql_error() . '<br><br> Please contact the webmaster.');}
mysql_close($con);
echo "<br><br>Thank you for voting! The results will be announced at the Closing Ceremony.<br><br> You are now logged out.";
session_destroy();
}
?>
</body>
</html>
