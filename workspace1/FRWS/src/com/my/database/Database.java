package com.my.database;
import java.util.List;
import java.sql.*;
import java.util.ArrayList;

import com.my.model.*;
public class Database {
	static final String JDBC_DRIVER = "com.mysql.jdbc.Driver";
	
	public List<Msg> getall() throws SQLException {
		try {
			Class.forName(JDBC_DRIVER);
		} catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		String DB_URL = "jdbc:mysql://localhost/app";
		Connection con =DriverManager.getConnection(DB_URL,"root","");
		System.out.println("Creating statement...");
	     Statement stmt = con.createStatement();
	     String sql;
	      sql = "SELECT * FROM chart";
	      ResultSet rs = stmt.executeQuery(sql);
	      Msg m1=null;
	      List<Msg> list = new ArrayList<Msg>();
	      while(rs.next()){
	    	  int id  = rs.getInt("id");
	    	  String name=rs.getString("name");
	    	  int in  = rs.getInt("india");
	    	  int ger  = rs.getInt("germany");
	    	  int fr  = rs.getInt("france");
	          //Retrieve by column name
	    	  m1 =new Msg(id,name,in,ger,fr);
	         
	         list.add(m1);
	         m1= null;
	          //System.out.print("ID:" + id +"\n");
	      }
	      
	      rs.close();
	      stmt.close();
	      con.close();
	      return list;
	}
}
