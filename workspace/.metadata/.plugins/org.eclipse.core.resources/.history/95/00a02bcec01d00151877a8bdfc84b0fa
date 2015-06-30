package com.my.resources;

import java.sql.SQLException;
import java.util.List;

import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

import com.my.database.Database;
import com.my.model.Msg;

@Path("/helo")
public class Hello {
	Database d1 = new Database();
@GET
@Produces(MediaType.APPLICATION_JSON)
public List<Msg> sayHtmlHello() throws SQLException 
{

    return d1.getall();
}

}
