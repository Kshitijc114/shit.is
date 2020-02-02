<html>
	<head>
		
		<title>Code Player!</title>
		
		<script type= "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		
		<script src="jQuery/jQueryUI/jquery-ui.min.js"></script>
		
		<link rel="stylesheet" href="jQuery/jQueryUI/jquery-ui.css"> 
		
		<link rel="stylesheet" href="lib/codemirror.css">
		
		<link rel="stylesheet" href="../../jqwidgets/styles/jqx.base.css" type="text/css"/>
		<script type="text/javascript" src="../../scripts/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="../../jqwidgets/jqxcore.js"></script>
		<script type="text/javascript" src="../../jqwidgets/jqxbuttons.js"></script>
		<script type="text/javascript" src="../../jqwidgets/jqxsplitter.js"></script>

		
		<style>
			
			body{
				all: unset;
				text-align: center;
				background-color: black;
				color: white;
			}
			.three,
			.three-1{
				position: relative;
				
				font-size: 15px;
				font-family: 'Lato', sans-serif;
				color: white;
				float: left;
				padding: 0px 10px 0px 10px; 
				border-left: 1px #BB454F solid;
				margin-top: -5px;
				
				
			}
			
			.three-1{
				border-left: none;
				position:relative;
				left: 10px;
				margin-right: 10px;
			}
			
			.first{
				position: relative;
				margin: 0 auto;
				height: 18px;
				background-color: black;
			}
			
			.second{
				
				position: relative;
				margin: 0 auto;
				height: 52px;
				background-color: #BB1919;
			}
			.inner{
				background-color: black;
				width: 275px;
				height: 30px;
				border-radius: 45%;
				margin: 0 auto;
				padding-top: 22px
				
			}
			button{

				all: unset;
				color: white;
				background: black
				height: 20px;
				
				}

			button:hover,
			button:focus {
				background-color: #BB1919;
				color: black;
			}

			button:focus {
				outline: 1px solid black;
				padding: 5px;
				outline-offset: -4px;
			}

			button:active {
				transform: scale(0.90);
			}
			a {
				color: black;
			}
			a:hover, a:focus {
				color: white;
				background-color: #1D1E22;
			}
			
			.activeButt {
				outline: 1px solid #BB1919;
			}
			
			#tabs{
				background-color: #1D1E22;
				position:absolute;
				height:100%;
				margin:0;
				padding:0;
				width:100%;
				max-height: 650px; 
				 display: flex;
				  flex-direction: row;
				  
				  overflow: hidden;
				  
				  /* avoid browser level touch actions */
				  xtouch-action: none;
			}
			
			#tabCSS, #tabHTML, #tabJS, #tabOutput{
				/* position: relative;
				float: left;
				
				margin: 0 auto;
				width: 22%;
				color: white;
				max-height: 650px;
				overflow: auto; */
				background-color: #1D1E22;
				display: block;
				padding: 20px;
				color: white;
				
			}
			
			
			
			
			#tabJS, #tabCSS, #tabHTML {
				float: left;
				overflow: auto;
				min-width: 40px;
				width: 300px;
				border-right: 2px solid black;
				
			
			}
			
			#tabOutput {
				flex: 1 1 auto;
			     resizable 
			    padding: 20px;
				overflow: auto;
			    width: 300px;
				height: 600px;
			    min-height: 400px;
			    min-width: 40px;
			   
			}
			
		/*	#tabHTML::-webkit-scrollbar {
				display: none;
			}
			#tabCSS::-webkit-scrollbar {
				display: none;
				
			#tabCSS1::-webkit-scrollbar {
				display: none;
			}
			#tabJS::-webkit-scrollbar {
				display: none;
			}
			#tabOutput::-webkit-scrollbar {
				display: none;
			}
		
		*/	​
		
		textarea {
			border: 2px red solid;
		}
		
		#js, #css, #html {
			bottom: 0;
			background-color: #1D1E22;
			color: white;
		    position: relative;
		    width: 100%;
			height:35em;
			border: 1px #BB1919 solid;
		}
		
		#js {
			bottom: 0;
		    position: relative;
		    width: 100%;
			height: 35em;
			border: 1px #BB1919 solid;
			color: white;
		}

		iframe {
		  bottom: 0;
		  position: relative;
		  width: 100%;
		  height: 29em;
		  background-color: white;
		  color: black;
		}
		
		</style>

	</head>
	
	<body> 
		
		<div class="first"></div>
		<div class="second">
		<div class="inner">
			<button id="buttHTML" class="three-1">HTML</button>	
			<button id="buttCSS" class="three">Css</button>	
			<button id="buttJS"class="three">Javascript</button>	
			<button id="buttOutput" class="three">Output</button>
		</div>	
		</div>
		<div class="first"></div>
		
		<div id="tabs" class="ui-widget-content container-fluid">
			
			<div id="tabHTML" >
				<h3>HTML</h3>
				<textarea id="html" placeholder="HTML"></textarea>
			</div>
			
			
			<div id="tabCSS" >
				<h3>CSS</h3>
				<textarea id="css" placeholder="CSS"></textarea>
			</div>
			
			
			<div id="tabJS" >
				<h3>Javascript</h3>
				<textarea id="js" placeholder="JavaScript"></textarea>
			</div>
			
			 
			
			<div id="tabOutput">
				<h3>Output</h3>
				<iframe id="code" src='about:blank'></iframe>
			</div>
		 
		</div>
		
		<script type="text/javascript"src="codeTut.js"></script>	
	
	</body>  
	
	
	
</html>  