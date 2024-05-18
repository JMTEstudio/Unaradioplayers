<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/lunaradio-sincors.js"></script>

<!--
body {
	background-color: #000000;
}
-->

</style>
<div id="lunaradio" style='width:100%; height:80px;
-webkit-border-top-left-radius: 50px;
  -webkit-border-top-right-radius: 50px;
  -webkit-border-bottom-right-radius: 50px;
  -webkit-border-bottom-left-radius: 50px;
  -moz-border-radius-topleft: 50px;
  -moz-border-radius-topright: 50px;
  -moz-border-radius-bottomright: 50px;
  -moz-border-radius-bottomleft: 50px;
  border-top-left-radius: 50px;
  border-top-right-radius: 50px;
  border-bottom-right-radius: 50px;
  border-bottom-left-radius: 50px;
  margin-top: -8px!important;
  border: none;'>
<div style="overflow:hidden; height:0px; width:0px;"><a href="https://radioplayer.luna-universe.com" title="native html internet radio player plugin">PLAYER UNA RADIO</a> powered by <a href="https://www.unaradio.net" title="Streaming de Audio y Video">JMT Estudio</a>
</div>
</div>

<script>
$("#lunaradio").lunaradio({
userinterface: "small", //big o small
backgroundcolor: "#f6a134",
fontcolor: "#ffffff",
hightlightcolor: "#2a3060", 
fontname: "bebas neue", 
googlefont: "bebas neue", 
fontratio: "0.6", 
radioname: "UNA RADIO", //nombre de radio
  scroll: "true",
  coverimage: "img/UNA%20RADIO%20Logo%20DUOTONE.jpg", //link o ruta de logo radio
  onlycoverimage: "false", //true para mostrar solo logo radio
  coverstyle: "",
  usevisualizer: "fake", //real o fake
  visualizertype: "4",
  metadatatechnic: "",
  ownmetadataurl: "",
  usestreamcorsproxy: "false", //true o false
  corsproxy: "https://cors-anywhere.herokuapp.com/",
  streamurl: "https://stream.zeno.fm/nasz1pwkga0uv",
  streamtype: "radiozeno", //shoutcast2, icecast2, radiozeno, radionomy, radiojar, radioco
  icecastmountpoint: "nasz1pwkga0uv",
  shoutcastpath: "/stream",
  shoutcastid: "1",
  streamsuffix: "",
  radionomyid: "",
  radionomyapikey: "",
  radiozenoid: "nasz1pwkga0uv",
  radiojarid: "",
  radiocoid: "",
  itunestoken: "1000lIPN",
  metadatainterval: "0500",
  volume: "100",
  autoplay: "false",
  debug: "true",
  });
</script>