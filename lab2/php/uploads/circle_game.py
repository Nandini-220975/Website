import pygame
import random
import sys
#Initialize pygame
pygame.init()
#screen setup
WIDTH,HEIGHT=800,600
win=pygame.display.set_mode((WIDTH,HEIGHT))
pygame.display.set_caption("Click the Circle Game")
#Background
bg_image=pygame.image.load("background")
bg_image=pygame.transform.scale(gg_image,(WIDTH,HEIGHT))
#Colors
WHITE=(255,255,255)
BLACK=(0,0,0)
RED=(255,0,0)
GREEN=(0,255,0)
BLUE=(0,0,255)
#Game variables
circle_radius=40
score=0
time_limit=60
circle_x=random.randint(circle_radius,WIDTH-circle_radius)
circle_y=random.randint(circle_radius,HEIGHT-circle_radius)
font=pygame.font.SysFont("Arial",32)
clock=pygame.time.Clock()
start_ticks=pygame.time.get_ticks()
#Game loop
running=True
while running:
    clock.tick(60)
    win.fill(WHITE)
    seconds=time_limit-(pygame.time.get_ticks()-start_ticks)//1000
    if seconds<=0:
        win.fill(WHITE)
        over_text=font.render("Time is up!",True,RED)
        score_text=font.render(f"Your score:{score}",True,BLUE)
        win.blit(over_text,(WIDTH//2-100,HEIGHT//2-40))
        win.blit(score_text,(WIDTH//2-100,HEIGHT//2+10))
        pygame.display.update()
        pygame.time.delay(5000)
        break
    #Draw the circle
    pygame.draw.circle(win,RED,(circle_x,circle_y),circle_radius)
    #Draw the score and timer
    score_text=font.render(f"Score:{score}",True,BLACK)
    time_text=font.render(f"Time:{seconds}",True,BLACK)
    win.blit(score_text,(10,10))
    win.blit(time_text,(WIDTH-150,10))
    pygame.display.update()
    #Event handling
    for event in pygame.event.get():
        if event.type==pygame.QUIT:
            running=False
            pygame.quit()
            sys.exit()
        elif event.type==pygame.MOUSEBUTTONDOWN:
            mouse_x,mouse_y=event.pos
            #check if the click is inside the circle
            dist=((mouse_x-circle_x)**2+(mouse_y-circle_y)**2)**0.5
            if dist<=circle_radius:
                score+=1
                circle_x=random.randint(circle_radius,WIDTH-circle_radius)
                circle_y=random.randint(circle_radius,HEIGHT-circle_radius)
pygame.quit()
