
CREATE TABLE meal_item(
    meal_item_id serial,
    item_name VARCHAR(100) NOT NULL,
    item_description TEXT,
    price DECIMAL NOT NULL,
    PRIMARY KEY (meal_item_id)
);

 CREATE TABLE meal_types(
     meal_type_id SERIAL,
     meal_type VARCHAR(20),
     PRIMARY KEY (meal_type_id)
);

CREATE TABLE recipe
(
    recipe_id SERIAL,
    recipe_name VARCHAR(100),
    recipe_directions TEXT,   
    PRIMARY KEY (recipe_id)
);

CREATE TABLE recipe_meal_items(
    recipe_meal_items_id SERIAL,
    recipe_id int REFERENCES recipe (recipe_id),
    meal_item_id INT REFERENCES meal_item (meal_item_id),
    PRIMARY KEY (recipe_meal_items_id)
);

CREATE TABLE meal(
    meal_id SERIAL,
    meal_name VARCHAR(100),
    recipe_id INT REFERENCES recipe (recipe_id),
    PRIMARY KEY (meal_id)
);

CREATE TABLE meal_plan
(
    meal_plan_id SERIAL,
    meal_date DATE,
    meal_type INT REFERENCES meal_types (meal_type_id),
    meal_id INT REFERENCES meal (meal_id),
    PRIMARY KEY (meal_plan_id)
);
