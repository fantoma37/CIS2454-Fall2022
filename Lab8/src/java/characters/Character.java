package characters;

import java.io.Serializable;

public class Character implements Serializable {

    private String name;
    private String characterClass;
    private int health;
    private int physicalPower;
    private int magicalPower;
    private int speed;

    public Character() {
        name = "";
        characterClass = "";
        health = 0;
        physicalPower = 0;
        magicalPower = 0;
        speed = 0;
    }

    public Character(String name, String characterClass, int health, int physicalPower,
            int magicalPower, int speed) {
        this.name = name;
        this.characterClass = characterClass;
        this.health = health;
        this.physicalPower = physicalPower;
        this.magicalPower = magicalPower;
        this.speed = speed;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getCharacterClass() {
        return characterClass;
    }

    public void setCharacterClass(String characterClass) {
        this.characterClass = characterClass;
    }

    public int getHealth() {
        return health;
    }

    public void setHealth(int health) {
        this.health = health;
    }

    public int getPhysicalPower() {
        return physicalPower;
    }

    public void setPhysicalPower(int physicalPower) {
        this.physicalPower = physicalPower;
    }

    public int getMagicalPower() {
        return magicalPower;
    }

    public void setMagicalPower(int magicalPower) {
        this.magicalPower = magicalPower;
    }
    
    public int getSpeed() {
        return speed;
    }

    public void setSpeed(int speed) {
        this.speed = speed;
    }

}
