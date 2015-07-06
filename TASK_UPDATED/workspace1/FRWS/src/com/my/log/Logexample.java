package com.my.log;
import javax.ws.rs.Path;

import org.apache.log4j.BasicConfigurator;
import org.apache.log4j.Logger;
@Path("/lo")
public class Logexample {
static final Logger log = Logger.getLogger(Logexample.class);
@Path("/one")
public void logprint() {
	
BasicConfigurator.configure();
log.debug("this is debugg");
log.info("this is information");
}

}
