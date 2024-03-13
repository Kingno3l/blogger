## A Blogging Platform 

### Sections
- Users section
- Admin section

### Features:
1. Login
2. Post management
3. Users management
4. Popular posts
5. Recent posts
6. Post categories management 
7. Trending posts
8. Post tags
9. Post Comments
10. Post notification
11. API development


## Tables Setup:

### Users table
- Id
- first_name
- last_name
- Email
- Password
- Role - super_admin, admin
- Status

### Posts table
- Id
- user_id
- Title
- Slug
- Excerpts
- Content
- Status
- published_date
- views_count

### Categories table
- Id
- user_id
- Name
- Status


### category_post table
- category_id
- post_id

### Tags table
- Id
- user_id
- Name
- Status

### post_tag table
- post_id
- tag_id

### Comments table
- Id
- Name
- Email
- Website
- Body
- Status
