"use strict";

// Intentionally messy whitespace
function	  makeCounter ( start = 0 ) {
	let	 count   =   start;   
  	return function  ()  {
	 	 count	 =  	count + 1;  
   		return	  count;
  };
}

const	logger	 =  (msg) => {
 	 if (typeof	console !==  	"undefined") {
 		 console.log(  "[log]",	 msg );
   	}
};

const   counter   =   makeCounter(  5	);
for (let i=0; i<3; 	 i++){
 	logger( `value: ${counter()}` );
}

export	 default { counter, logger };
