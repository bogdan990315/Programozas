var db = 40;
var helyek = new Array(db);
for(i = 0; i < helyek.length; i++)
{
	helyek[i] = 0; // üres hely
}

var kep_ures = new Image();
kep_ures.src = "kepek/szekszabad.png";
var kep_kijelolt = new Image();
kep_kijelolt.src = "kepek/szekkijelolt.png";
var kep_foglalt = new Image();
kep_foglalt.src = "kepek/szekfoglalt.png";

	function kijelol(aktualis)
	{
		var sorszam = aktualis.id.substring(3); // substring 3 --> balról a 3. karaktertől mindent bevág (3, 2) --> 3. tól 2db karaktert
		switch (helyek[sorszam])
		{
			case 0:		// üres volt
				helyek[sorszam] = 2; // üres eredeti kijelölve
				aktualis.src = kep_kijelolt.src; // kijelölt szék kép
				break;
			case 1:		// foglalt volt
				helyek[sorszam] = 3;	// kijelölt - foglalt
				aktualis.src = kep_kijelolt.src; // kijelölt szék kép
				break;
			case 2:		//  üres kijelölve
				helyek[sorszam] = 0;	// üres
				aktualis.src = kep_ures.src; // üres szék kép
				break;
			case 3:		// foglalt kijelölve 
				helyek[sorszam] = 1;	// foglalt
				aktualis.src = kep_foglalt.src; //foglalt szék kép
				break;
		}
	}
	
	function foglal()
	{
		var azon = "kep";
		for(i = 0; i < helyek.length; i++)
		{
			if(helyek[i] == 2 || helyek[i] == 3)
			{
				helyek[i] = 1; // foglalt hely
				document.getElementById(azon+i).src = kep_foglalt.src; // foglalt szék kép
			}
		}
		document.getElementById("tele").innerHTML = (helyek.every(televan)) ? "Tele!" : "";
	}
	
	function torol()
	{
		var azon = "kep";
		for(i=0; i<helyek.length; i++)
		{
			if(helyek[i] == 2 || helyek[i] == 3)
			{
				helyek[i] = 0; // üres hely
				document.getElementById(azon+i).src = kep_ures.src; // üres szék kép
			}
		}
		document.getElementById("tele").innerHTML = (helyek.every(televan)) ? "Tele!" : "";
	}
	
	function vissza()
	{
		var azon = "kep";
		for(i = 0; i < helyek.length; i++)
		{
			if(helyek[i] == 2)
			{
				helyek[i] = 0;	// üres hely
				document.getElementById(azon+i).src = kep_ures.src; // üres szék kép
			}
			if(helyek[i] == 3)
			{
				helyek[i] = 0;	// üres hely
				document.getElementById(azon+i).src = kep_foglalt.src; // foglalt szék kép
			}
			document.getElementById("tele").innerHTML = (helyek.every(televan)) ? "Tele!" : "";
		}
	}
	
	function televan(elem)
	{
		return elem == 1;
	}