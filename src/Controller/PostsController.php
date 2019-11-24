<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 *
 * @method \App\Model\Entity\Post[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PostsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        // $posts = $this->paginate($this->Posts);

        // $this->set(compact('posts'));
        $query = $this->Posts->find()
            ->where(['resId =' => 0])
            ->order(['modified' => 'desc'])
            ;
        $posts = $this->paginate($query);

        $this->set(compact('posts'));
        $this->set('_serialize', ['posts']);
    }

    /**
     * View method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($postId = null)
    {
        $new_post = $this->Posts->newEntity();
        $posts = $this->Posts->find()
            ->where(['postId =' => $postId])
            ->order(['resId' => 'asc']);

        $this->set(compact('posts', 'new_post'));
        $this->set('_serialize', ['post']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $post = $this->Posts->newEntity();
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());

            if ($post->postId == -1) {
                $post->postId = $this->Posts->find()
                    ->order(['postId' => 'desc'])
                    ->select(['postId'])
                    ->first()['postId'] + 1;
                $post->resId = 0;
            }

            if ($this->Posts->save($post)) {
                $this->Flash->success(__('投稿されました'));
                if ($post->resId ===0) return $this->redirect(['action' => 'index']);
                else                   return $this->redirect($this->referer());
            } else {
                $this->Flash->error(__('投稿できませんでした. 再度お試し下さい.'));
            }
        }
        $this->set(compact('post'));
        $this->set('_serialize', ['post']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $post = $this->Posts->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $post = $this->Posts->patchEntity($post, $this->request->data);
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('投稿が編集されました.'));
                return $this->redirect(['action' => 'view', $post->postId]);
            } else {
                $this->Flash->error(__('投稿が編集出来ませんでした. 再度お試し下さい.'));
            }
        }
        $this->set(compact('post'));
        $this->set('_serialize', ['post']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $del_post = $this->Posts->get($id);
        if($del_post->resId === 0) {
            if ($this->Posts->deleteAll(array('postId' => $del_post->postId))) {
                $this->Flash->success(__('投稿が削除されました.'));
            } else {
                $this->Flash->error(__('投稿が削除されませんでした. もう一度お試し下さい.'));
            }
            return $this->redirect(['action' => 'index']);
        }
        else if ($this->Posts->delete($del_post)) {
            $this->Flash->success(__('投稿が削除されました.'));
        } else {
            $this->Flash->error(__('投稿が削除されませんでした. もう一度お試し下さい.'));
        }
        return $this->redirect($this->referer());
    }
}
