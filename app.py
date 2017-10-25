import time
user_list = []
user_token_id = 0
class user(object):
	user_name = ""
	def initiate_user_request():
		user_name = input('Enter your name')
		request_type = input('Enter your request type')
		user_token_id += 1 
	def add_user_to_list(id):
		user_list.append(id)
		print('Your token number {token} has been added to list.'.format(token = id))
	def delete_user_form_list(id):
		user_list.pop(0)
		print('Your token number {token} has been added to list.'.format(token = id))
	def move_user_to_back_of_list(id):
		user = user_list.pop(0)
		user_list.append(user)
			
