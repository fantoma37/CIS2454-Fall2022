
package students;

import java.io.Serializable;

public class Student implements Serializable {

   private String name;
    private int year;
    private double GPA;
    
    public Student(){
        
    }
    
    public Student(String name, int year, double GPA){
        this.name = name;
        this.year = year;
        this.GPA = GPA;
    }
    

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }
    public int getYear() {
        return year;
    }

    public void setYear(int year) {
        this.year = year;
    }
    public double getGPA() {
        return GPA;
    }

    public void setGPA(double GPA) {
        this.GPA = GPA;
    }
    
}