function encodePercentURI(string){
	
	string = string.replace("%20", " ");
	string = string.replace("%21", "!");
	string = string.replace("%22", "\"");
	string = string.replace("%23", "#");
	string = string.replace("%24", "$");
	string = string.replace("%26", "&");
	string = string.replace("%27", "'");
	string = string.replace("%28", "(");
	string = string.replace("%29", ")");
	string = string.replace("%2A", "*");
	string = string.replace("%2B", "+");
	string = string.replace("%2C", ",");
	string = string.replace("%2D", "-");
	string = string.replace("%2E", ".");
	string = string.replace("%2F", "/");
	string = string.replace("%3A", ":");
	string = string.replace("%3B", ";");
	string = string.replace("%3C", "<");
	string = string.replace("%3D", "=");
	string = string.replace("%3E", ">");
	string = string.replace("%3F", "?");
	string = string.replace("%40", "@");
	string = string.replace("%5B", "[");
	string = string.replace("%5C", "\\");
	string = string.replace("%5D", "]");
	string = string.replace("%7B", "{");
	string = string.replace("%7C", "|");
	string = string.replace("%7D", "}");
	string = string.replace("%25", "%");
	
	return string;
	
}

function decodePercentURI(string){
	
	string = string.replace("%", "%25");
	string = string.replace(" ", "%20");
	string = string.replace("!", "%21");
	string = string.replace("\"", "%22");
	string = string.replace("#", "%23");
	string = string.replace("$", "%24");
	string = string.replace("&", "%26");
	string = string.replace("'", "%27");
	string = string.replace("(", "%28");
	string = string.replace(")", "%29");
	string = string.replace("*", "%2A");
	string = string.replace("+", "%2B");
	string = string.replace(",", "%2C");
	string = string.replace("-", "%2D");
	string = string.replace(".", "%2E");
	string = string.replace("/", "%2F");
	string = string.replace(":", "%3A");
	string = string.replace(";", "%3B");
	string = string.replace("<", "%3C");
	string = string.replace("=", "%3D");
	string = string.replace(">", "%3E");
	string = string.replace("?", "%3F");
	string = string.replace("@", "%40");
	string = string.replace("[", "%5B");
	string = string.replace("\\", "%5C");
	string = string.replace("]", "%5D");
	string = string.replace("{", "%7B");
	string = string.replace("|", "%7C");
	string = string.replace("}", "%7D");
	
	return string;
	
}
