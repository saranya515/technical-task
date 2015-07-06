package com.my.resources;

import java.sql.SQLException;
import java.util.List;

import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;
import javax.ws.rs.core.GenericEntity;
import javax.ws.rs.core.MediaType;



import org.apache.log4j.BasicConfigurator;
import org.apache.log4j.Logger;


import com.my.database.Database;
import com.my.model.Msg;

@Path("/helo")
public class Hello {

	static final Logger logg= Logger.getLogger(Hello.class);
	
	Database d1 = new Database();
@GET
@Produces(MediaType.APPLICATION_JSON)
public GenericEntity<List<Msg>> sayHtmlHello() throws SQLException 
{
BasicConfigurator.configure();
if(logg.isDebugEnabled())
{
logg.debug("this is debug");
}
if(logg.isInfoEnabled())
logg.info("we are going to connect database class");

    return d1.getall();
}

}
