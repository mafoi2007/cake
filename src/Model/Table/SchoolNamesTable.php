<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SchoolNames Model
 *
 * @method \App\Model\Entity\SchoolName newEmptyEntity()
 * @method \App\Model\Entity\SchoolName newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\SchoolName> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SchoolName get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\SchoolName findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\SchoolName patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\SchoolName> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SchoolName|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\SchoolName saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\SchoolName>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SchoolName>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SchoolName>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SchoolName> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SchoolName>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SchoolName>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\SchoolName>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\SchoolName> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SchoolNamesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('school_names');
        $this->setDisplayField('school_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('school_name')
            ->maxLength('school_name', 100)
            ->requirePresence('school_name', 'create')
            ->notEmptyString('school_name');

        return $validator;
    }
}
