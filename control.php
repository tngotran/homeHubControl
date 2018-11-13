
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  
  <head>
	   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	   <title>Apache2 Ubuntu Default Page: It works</title>
	   <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
           <script type="text/javascript">
		   

	 $(document).ready(function(){
	 	 $('#pl1').click(function(){     // Chỗ on là bạn thay cái id mà bạn đặt cho button
	  		 var a = new XMLHttpRequest();
	   		 a.open("GET", "yt.php?q=" + "pl1", true);   // thay cái batden.php thành file thực thi của bạn
			 a.onreadystatechange=function(){
			    if(a.readyState==4){
			   	    if(a.status == 200){

				    }
				     else  alert("Error")
	    		    }
		 	 }
		         a.send();
		});
		 $('#pl2').click(function(){     // Chỗ on là bạn thay cái id mà bạn đặt cho button
                         var a = new XMLHttpRequest();
                         a.open("GET", "yt.php?q=" + "pl2", true);   // thay cái batden.php thành file thực thi của bạn
                         a.onreadystatechange=function(){
                            if(a.readyState==4){
                                    if(a.status == 200){
                                    }
                                     else  alert("Error")
                            }
                         }
                         a.send();
                });

		 $('#pl3').click(function(){     // Chỗ on là bạn thay cái id mà bạn đặt cho button
                         var a = new XMLHttpRequest();
                         a.open("GET", "yt.php?q=" + "pl3", true);   // thay cái batden.php thành file thực thi của bạn
                         a.onreadystatechange=function(){
                            if(a.readyState==4){
                                    if(a.status == 200){
                                    }
                                     else  alert("Error")
                            }
                         }
                         a.send();
                });

		 $('#pop').click(function(){     // Chỗ on là bạn thay cái id mà bạn đặt cho button
                         var a = new XMLHttpRequest();
                         a.open("GET", "yt.php?q=" + "pop", true);   // thay cái batden.php thành file thực thi của bạn
                         a.onreadystatechange=function(){
                            if(a.readyState==4){
                                    if(a.status == 200){
                                    }
                                     else  alert("Error")
                            }
                         }
                         a.send();
                });
		 $('#kara').click(function(){     // Chỗ on là bạn thay cái id mà bạn đặt cho button
                         var a = new XMLHttpRequest();
                         a.open("GET", "yt.php?q=" + "kara", true);   // thay cái batden.php thành file thực thi của bạn
                         a.onreadystatechange=function(){
                            if(a.readyState==4){
                                    if(a.status == 200){
                                    }
                                     else  alert("Error")
                            }
                         }
                         a.send();
                });



	 	 $('#turnOffCom').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "light.php?q=" + "lightOff", true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
				     }
				     else{
					     alert("Error")
				     }
	    		    }
	   		}
		       a.send();
		 });

		 $('#musicOn').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "music.php?q="+"musicOn",true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
				     }
				     else{
					     alert("Error")
				     }
	    		    }
	   		}
		       a.send();
		 });

		
		 $('#piano').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		
			console.log("piano clicked")
			var a = new XMLHttpRequest();
		 	a.open("GET", "music.php?q="+"piano",true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
				     }
				     else{
					     alert("Error")
				     }
	    		    }
	   		}
		       a.send();
		 });

		 $('#mozart').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "music.php?q="+"mozart",true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
				     }
				     else{
					     alert("Error")
				     }
	    		    }
	   		}
		       a.send();
		 });

		 $('#yiruma').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "music.php?q="+"yiruma",true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
				     }
				     else{
					     alert("Error")
				     }
	    		    }
	   		}
		       a.send();
		 });
		 $('#beethoven').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "music.php?q="+"beethoven",true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
				     }
				     else{
					     alert("Error")
				     }
	    		    }
	   		}
		       a.send();
		 });
		 $('#wakeup').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "music.php?q="+"wakeup",true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
				     }
				     else{
					     alert("Error")
				     }
	    		    }
	   		}
		       a.send();
		 });
		 $('#bath').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "music.php?q="+"bath",true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
				     }
				     else{
					     alert("Error")
				     }
	    		    }
	   		}
		       a.send();
		 });
		 $('#sleep').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
			console.log("click Sleep button");
	   		var a = new XMLHttpRequest();
			a.open("GET","yt.php?q="+"df",true);
		 //	a.open("GET", "music.php?q="+"sleep",true);   // thay cái tatden.php thành file thực thi của bạn
			console.log("after open method");
		    a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
						 console.log("status == 200");
				     }
				     else{
						 console.log("error");
					     alert("Error")
				     }
	    		    }
	   		}
		       a.send();
		 });





		 $('#musicOff').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();		 	a.open("GET", "music.php?q=" + "musicOff",true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
				     }
				     else{
					     alert("Error")
				     }
	    		    }
	   		}
		       a.send();
		 });
		 $('#vlUp').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "volume.php?q="+"volumeUp",true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
				     }
				     else{
					     alert("Error - I don't know but there is an error 404 maybe :)")
				     }
	    		    }
	   		}
		       a.send();
		 });
		 $('#vlDown').click(function(){     // Chỗ off là bạn thay cái id mà bạn đặt cho button
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "volume.php?q="+"volumeDown",true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
				     }
				     else{
					     alert("Error - I don't know but there is an error 404 maybe :)")
				     }
	    		    }
	   		}
		       a.send();
		 });
		 $('#vlMute').click(function(){ 
 			var a = new XMLHttpRequest();
		 	a.open("GET", "volume.php?q="+"volumeMute",true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
				     }
				     else{
					     alert("Error - I don't know but there is an error 404 maybe :)")
				     }
	    		    }
	   		}
		       a.send();
		 });
		 $('#i').click(function(){     
	   		var a = new XMLHttpRequest();
		 	a.open("GET", "volume.php?q="+"volumeDown",true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
				     }
				     else{
					     alert("Error - I don't know but there is an error 404 maybe :)")
				     }
	    		    }
	   		}
		       a.send();
		 });
	});
	</script>

	</head>
<body>

<!--   <button type="button" id="pl1">play List1</button><br>
  <button type="button" id="pl2">play List2</button><br>
  <button type="button" id="pl3">play List3</button><br>
  <button type="button" id="pop">pop music</button><br>
  <button type="button" id="kara">karaoke song</button><br> -->
  <!-- <button type="button" id="musicOn">Music On</button><br> -->

	<button type="button" id="musicOff">Music Off</button><br>
	<br><br>Nhac giao huong:
	<button type="button" id="mozart">Mozart</button>
	<button type="button" id="piano">Piano</button>
	<button type="button" id="yiruma">Yiruma</button>
	<button type="button" id="beethoven">Beethoven</button>

	<br><br>Morning Songs:
	<button type="button" id="wakeup">Wake Up</button>
	<button type="button" id="sleep">Sleep</button> 
	<button type="button" id="bath">bath</button>
	<br><br> Volume Control:
	<button type="button" id="vlUp">Volume UP</button> 
	<button type="button" id="vlDown">Volume DOWN</button>
	<button type="button" id="vlMute">Mute</button>
	<br><br>


	<div id="buttons">
	<label> <input id="query" value="" type="text"/><button id="search-button"    onclick="keyWordsearch()">Search Youtube</button></label>    
	<div id="container">
	<h1>Search Results</h1>
	<ul id="results"></ul>
	</div>

	<script>
	var vidUrls = [];


	function keyWordsearch(){
		console.log("keyWordsearch");
		gapi.client.setApiKey('AIzaSyCHzBUTEoS4b2255RtQCND18sc10uACgJU');
		gapi.client.load('youtube', 'v3', function(){
				makeRequest();
		});
		
	}

	function buttonPlay(id){
		console.log("buttonPlay " + id);
		console.log(vidUrls[id])
		var a = new XMLHttpRequest();
		 
       		a.open("GET","yt.php?q="+vidUrls[id],true);
		// a.open("GET", "openFireFox.php?q="+id,true);   // thay cái tatden.php thành file thực thi của bạn
	 	// a.open("GET", "volume.php?q="+"volumeMute",true);   // thay cái tatden.php thành file thực thi của bạn
		        a.onreadystatechange=function(){
			    if(a.readyState==4){
				     if(a.status == 200){
						console.log("status == 200")
				     }
				     else{
						 console.log("Error")
					     alert("Error - I don't know but there is an error 404 maybe :)")
				     }
	    		    }
	   		}
		       a.send();
	}


	function makeRequest(){
		console.log("makeRequest");
		var q = $('#query').val();
		var request = gapi.client.youtube.search.list({
				q: q,
				part: 'snippet',
				maxResults: 4  
		});
		
		request.execute(function(response)  {                                                                              
				$('#results').empty()
				vidUrl = []
				var srchItems = response.result.items;
				var i = 0
				$.each(srchItems, function(index, item){

						itemKind = item.id.kind
						if(typeof itemKind == "string" && itemKind.indexOf('video') > -1){//check if the result is a channel or a video
							vidUrl = item.id.videoId
							console.log("https://www.youtube.com/watch?v="+vidUrl)
							vidTitle = item.snippet.title;
							vidThumburl =  item.snippet.thumbnails.default.url;

							vidThumbimg = '<pre><img id="thumb" src="'+vidThumburl+'" alt="No  Image  Available." style="width:204px;height:128px"><button type="button" onclick="buttonPlay('+ i +')" id="'+ i +'">Play this</button></pre>';
							vidUrls[i] = vidUrl;
							//$('#results').append('<pre>' + vidTitle + vidThumbimg + '</pre>');
							
  $('#results').append('<pre><iframe width="560" height="315" src="https://www.youtube.com/embed/'+vidUrl+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><button type="button" onclick="buttonPlay('+ i +')" id="'+ i +'">Play this</button></pre>')
						}
						i = i + 1
				})
	})  
	}
	</script> 
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="https://apis.google.com/js/client.js?onload=googleApiClientReady">   </script>


	
  <?php 
  	function debug_to_console( $data ) {
		$output = $data;
		if ( is_array( $output ) )
			$output = implode( ',', $output);

		echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
	}

	// debug_to_console( "Test" );

    //     $saved = getenv("PULSE_SERVER");        // save old value 
    $newld = "/run/user/1000/pulse/native";  // extra paths to add 
    //  if ($saved) { $newld .= ":$saved"; }           // append old paths if any 
    putenv("PULSE_SERVER=$newld");        // set new value 
    putenv("PULSE_SERVER=/run/user/1000/pulse/native");        // set new value 
    echo exec('sudo amixer set PCM on 2>&1') . " \n";	

    //echo exec('chromium-browser 2>&1') 
    //  echo exec('sudo amixer -D pulse sset Master 50% 2>&1');
    // echo date("l");
    // putenv("PULSE_SERVER=$saved");        // restore old value
  ?>

	<br><br>
	<br><br>
	<br><br>
	<button type="button" id="turnOffCom">Turn OFF Computer</button><br>  
</body>

</html>



