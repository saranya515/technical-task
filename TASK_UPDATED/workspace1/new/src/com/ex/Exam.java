package com.ex;

import javax.ws.rs.Path;

import org.apache.log4j.BasicConfigurator;
import org.apache.log4j.Logger;

public class Exam {
	
static final Logger logger = Logger.getLogger(Exam.class);
@Path("/example")
public static void main(String arg[])
{
	BasicConfigurator.configure();
	logger.debug("this is debugg");
}
}
