feature 
- can added with no content
- added button not function went they have content
- they have edit, view and delete functionality
--- full crud functionality ---


Dynamic (done)
Main Page:
-Main Image
-Main heading
-Main Sub heading
-Main text


Services
-Icon
-service title
-service text

About Us (database -> backend)
-About us image
-About us heading
-About us description
name : 
crud-aboutUsContent
list
view
add (done)
database:
table name: about_content
column:
id	
about_image	
about_heading	
about_text	
	



[
# crud content file
crud-mainPageIntro (crud main page)

crud-mainPageIntroContent-add (add database function)
crud-mainPageIntroContent-delete (delete database function)
crud-mainPageIntroContent-edit (edit database function)
crud-mainPageIntroContent-list (get all database function)
crud-mainPageIntroContent-view (get 1 database function)
crud-mainPageIntroContent (all ajax funciton on main page)

component-file
]

Partnership
-parners image
-partners name

Testimonial
-Testimonial Title
-Testimonial Content
-Testimonial Name
-Testimonial Job Title

Our Team
-Team Image
-Team name
-Team position

Contact Us
-Drop down
->Parnertship Inquiry
->Others

ayusing ang qualification  textarea view sa job modal

database query

crud-mainPageIntroContent-list
crud-mainPageIntro
crud-mainPageIntroContent


id,
job_image,
job_role,
location,
job_type,
date_created,
job_description,
qualification,

query (
CREATE TABLE job_posting (
    id INT AUTO_INCREMENT PRIMARY KEY,
    job_image VARCHAR(255),
    job_role VARCHAR(100),
    location VARCHAR(100),
    job_type VARCHAR(50),
    date_created DATE DEFAULT CURRENT_DATE,
    job_description TEXT,
    qualification VARCHAR(255)
);


CREATE TABLE introduction_content (
    id INT AUTO_INCREMENT PRIMARY KEY,
    main_image VARCHAR(255),
    main_subheading VARCHAR(100),
    main_heading VARCHAR(100),
    main_text TEXT
);

)



job posting functionality
---- list of file -----
- dashboard page (done)
- dashboard content (done)
- list function (done)
- create function  (done)
- view function  (done)
- edit function (done)
- delete function (done)

image upload validation
- 2mb maximum
- validation extension 